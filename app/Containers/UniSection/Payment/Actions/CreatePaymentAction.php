<?php

namespace App\Containers\UniSection\Payment\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\Installment\Tasks\CreateInstallmentTask;
use App\Containers\UniSection\PaymentMethod\Tasks\FindPaymentMethodByIdTask;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\Payment\Tasks\CreatePaymentTask;
use App\Containers\UniSection\Payment\UI\API\Requests\CreatePaymentRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePaymentAction extends ParentAction
{
    public function __construct(
        private readonly CreatePaymentTask $createPaymentTask,
        private readonly CreateInstallmentTask $createInstallmentTask,
        private readonly FindPaymentMethodByIdTask $findPaymentMethodByIdTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePaymentRequest $request): Payment
    {
        $data = $request->sanitizeInput([
            'student_id',
            'amount',
            'payment_method_id'
        ]);

        $payment = $this->createPaymentTask->run($data);

        $this->createInstallments($payment);

        return $payment;
    }

    private function createInstallments(Payment $payment)
    {
        $installments = $this->findPaymentMethodByIdTask->run($payment->payment_method_id)['installments'];

        if($installments === 1){

            $data = [
                'payment_id' => $payment->id,
                'installment' => 1,
                'amount' => number_format($payment->amount, 2, '.', ',')
            ];

            $this->createInstallmentTask->run($data);
        }else{

            $installmentAmount = $payment->amount / $installments;

            for ($i = 1; $i <= $installments; $i++) {
                
                $installmentData = [
                    'payment_id' => $payment->id,
                    'installment' => $i,
                    'amount' => number_format($installmentAmount, 2, '.', ',')
                ];
    
                // Step 6: Call the CreateInstallmentAction to create each installment
                $this->createInstallmentTask->run($installmentData);
            }
        }
    }
}
