<?php

namespace App\Containers\UniSection\Payment\UI\API\Transformers;

use App\Containers\UniSection\Payment\Models\Payment;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PaymentTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

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
            'payment_way_id' => $payment->payment_way_id,
            'created_at' => $payment->created_at,
            'updated_at' => $payment->updated_at
        ];
    }
}
