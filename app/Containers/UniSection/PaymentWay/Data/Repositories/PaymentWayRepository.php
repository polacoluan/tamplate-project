<?php

namespace App\Containers\UniSection\PaymentWay\Data\Repositories;

use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PaymentWayRepository extends ParentRepository
{
    protected $fieldSearchable = [
        'id' => '=',
        'way' => 'like',
        'installments' => '='
    ];

    protected $model = PaymentWay::class;
}
