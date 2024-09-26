<?php

namespace App\Containers\UniSection\Installment\UI\API\Transformers;

use App\Containers\UniSection\Installment\Models\Installment;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class InstallmentTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Installment $installment): array
    {
        $response = [
            'object' => $installment->getResourceKey(),
            'id' => $installment->getHashedKey(),
        ];

        return [
            'id' => $installment->id,
            'payment_id' => $installment->payment_id,
            'installment' => $installment->installment,
            'amount' => $installment->amount,
            'payment_date' => $installment->payment_date,
            'created_at' => $installment->created_at,
            'updated_at' => $installment->updated_at
        ];
    }
}
