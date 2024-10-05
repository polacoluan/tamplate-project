<?php

namespace App\Containers\UniSection\Student\UI\API\Transformers;

use App\Containers\UniSection\Payment\UI\API\Transformers\PaymentTransformer;
use App\Containers\UniSection\Student\Models\Student;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class StudentTransformer extends ParentTransformer
{
    public function transform(Student $student): array
    {
        return [
            'id' => $student->getHashedKey(),
            'name' => $student->name,
            'email' => $student->email,
            'cellphone' => $student->cellphone,
            'birth_date' => $student->birth_date,
            'cpf' => $student->cpf,
            'created_at' => $student->created_at,
            'updated_at' => $student->updated_at,
        ];
    }
}
