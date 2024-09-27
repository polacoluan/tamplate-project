<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Transformers;

use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PaymentMethodTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(PaymentMethod $paymentmethod): array
    {
        $response = [
            'object' => $paymentmethod->getResourceKey(),
            'id' => $paymentmethod->getHashedKey(),
        ];

        return [
            'id' => $paymentmethod->id,
            'method' => $paymentmethod->method,
            'installments' => $paymentmethod->installments,
            'created_at' => $paymentmethod->created_at,
            'updated_at' => $paymentmethod->updated_at
        ];
    }
}
