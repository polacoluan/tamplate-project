<?php

namespace App\Containers\UniSection\PaymentWay\Data\Factories;

use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of PaymentWayFactory
 *
 * @extends ParentFactory<TModel>
 */
class PaymentWayFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = PaymentWay::class;

    public function definition(): array
    {
        return [
            //
        ];
    }
}
