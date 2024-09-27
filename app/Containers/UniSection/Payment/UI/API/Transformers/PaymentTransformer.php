<?php

namespace App\Containers\UniSection\Payment\UI\API\Transformers;

use App\Containers\UniSection\Installment\UI\API\Transformers\InstallmentTransformer;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\PaymentMethod\UI\API\Transformers\PaymentMethodTransformer;
use App\Containers\UniSection\Student\UI\API\Transformers\StudentTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PaymentTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'installments',
        'student',
        'paymentMethod'
    ];

    protected array $availableIncludes = [
        'installments',
        'student',
        'paymentMethod'
    ];

    public function transform(Payment $payment): array
    {
        $response = [
            'object' => $payment->getResourceKey(),
            'id' => $payment->getHashedKey(),
        ];

        return [
            'id' => $payment->id,
            'student_id' => $payment->student_id,
            'amount' => $payment->amount,
            'payment_method_id' => $payment->payment_method_id,
            'created_at' => $payment->created_at,
            'updated_at' => $payment->updated_at
        ];
    }
    
    public function includeInstallments(Payment $payment)
    {
        $installments = $payment->installments; // Load the installments relationship
        return $this->collection($installments, new InstallmentTransformer());
    }

    public function includePaymentMethod(Payment $payment)
    {
        $paymentMethod = $payment->paymentMethod; // Load the paymentMethod relationship
        
        if ($paymentMethod) {
            return $this->item($paymentMethod, new PaymentMethodTransformer());
        }
        
        return null; // Return null if no paymentMethod is associated with the payment
    }

    public function includeStudent(Payment $payment)
    {
        $student = $payment->student; // Load the student relationship
    
        if ($student) {
            return $this->item($student, new StudentTransformer()); // Use item() for a single model
        }
    
        return null; // Return null if no student is associated with the payment
    }
}
