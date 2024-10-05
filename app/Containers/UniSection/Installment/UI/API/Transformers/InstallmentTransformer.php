<?php

namespace App\Containers\UniSection\Installment\UI\API\Transformers;

use App\Containers\UniSection\Installment\Models\Installment;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class InstallmentTransformer extends ParentTransformer
{
    public function transform(Installment $installment): array
    {
        return [
            'id' => $installment->getHashedKey(),
            'payment_id' => $installment->getHashedKey("payment_id"),
            'installment' => $installment->installment,
            'amount' => $installment->amount,
            'payment_date' => $installment->payment_date,
            'student_name' => $installment->student_name,
            'created_at' => $installment->created_at,
            'updated_at' => $installment->updated_at
        ];
    }
}
