<?php

namespace App\Containers\UniSection\Student\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;
use App\Containers\UniSection\Student\Models\Student;

class StudentRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
        'email' => 'like',
        'cellphone' => 'like',
        'birth_date' => '=',
        'cpf' => 'like'
    ];

    protected $model = Student::class;
}
