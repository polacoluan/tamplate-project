<?php

namespace App\Containers\UniSection\Student\UI\API\Transformers;

use App\Containers\UniSection\Student\Models\Student;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class StudentTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Student $student): array
    {
        $response = [
            'object' => $student->getResourceKey(),
            'id' => $student->getHashedKey(),
        ];

        return [
            'id' => $student->id,
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
