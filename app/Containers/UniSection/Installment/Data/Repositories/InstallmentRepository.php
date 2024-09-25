<?php

namespace App\Containers\UniSection\Installment\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class InstallmentRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
