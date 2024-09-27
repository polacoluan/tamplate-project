<?php

namespace App\Containers\UniSection\PaymentMethod\Data\Repositories;

use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PaymentMethodRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
        'method' => 'like',
        'installments' => '='
    ];

    protected $model = PaymentMethod::class;
}
