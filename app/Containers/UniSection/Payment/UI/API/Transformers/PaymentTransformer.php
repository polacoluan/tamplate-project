<?php

namespace App\Containers\UniSection\Payment\UI\API\Transformers;

use App\Containers\UniSection\Installment\UI\API\Transformers\InstallmentTransformer;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\PaymentMethod\UI\API\Transformers\PaymentMethodTransformer;
use App\Containers\UniSection\Student\UI\API\Transformers\StudentTransformer;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;
use League\Fractal\Resource\Item;
use League\Fractal\Resource\Primitive;

class PaymentTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'installments',
        'student',
        'paymentMethod'
    ];

    public function transform(Payment $payment): array
    {
        return [
            'id' => $payment->getHashedKey(),
            'student_id' => $payment->getHashedKey("student_id"),
            'amount' => $payment->amount,
            'payment_method_id' => $payment->getHashedKey("payment_method_id"),
            'created_at' => $payment->created_at,
            'updated_at' => $payment->updated_at
        ];
    }
    
    public function includeInstallments(Payment $payment)
    {
        $installments = $payment->installments;
        return $this->collection($installments, new InstallmentTransformer());
    }

    public function includePaymentMethod(Payment $payment): Item|Primitive
    {
        $paymentMethod = $payment->paymentMethod;                
        return $this->nullableItem($paymentMethod, new PaymentMethodTransformer());        
    }

    public function includeStudent(Payment $payment): Item|Primitive
    {
        $student = $payment->student;
        return $this->nullableItem($student, new StudentTransformer());
    }
}
