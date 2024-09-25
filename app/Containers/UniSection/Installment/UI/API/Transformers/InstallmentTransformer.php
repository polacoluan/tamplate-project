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

        return $this->ifAdmin([
            'real_id' => $installment->id,
            'created_at' => $installment->created_at,
            'updated_at' => $installment->updated_at,
            'readable_created_at' => $installment->created_at->diffForHumans(),
            'readable_updated_at' => $installment->updated_at->diffForHumans(),
            // 'deleted_at' => $installment->deleted_at,
        ], $response);
    }
}
