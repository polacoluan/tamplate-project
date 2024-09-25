<?php

namespace App\Containers\UniSection\Payment\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PaymentRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
