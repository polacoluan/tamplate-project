<?php

namespace App\Containers\UniSection\PaymentWay\UI\API\Transformers;

use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class PaymentWayTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(PaymentWay $paymentway): array
    {
        $response = [
            'object' => $paymentway->getResourceKey(),
            'id' => $paymentway->getHashedKey(),
        ];

        return [
            'id' => $paymentway->id,
            'way' => $paymentway->way,
            'installments' => $paymentway->installments,
            'created_at' => $paymentway->created_at,
            'updated_at' => $paymentway->updated_at
        ];
    }
}
