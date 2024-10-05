<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Transformers;

use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PaymentMethodTransformer extends ParentTransformer
{
    public function transform(PaymentMethod $paymentmethod): array
    {
        return [
            'id' => $paymentmethod->getHashedKey(),
            'method' => $paymentmethod->method,
            'installments' => $paymentmethod->installments,
            'created_at' => $paymentmethod->created_at,
            'updated_at' => $paymentmethod->updated_at
        ];
    }
}
