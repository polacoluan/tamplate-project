<?php

namespace App\Containers\UniSection\PaymentMethod\Data\Factories;

use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of PaymentMethodFactory
 *
 * @extends ParentFactory<TModel>
 */
class PaymentMethodFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = PaymentMethod::class;

    public function definition(): array
    {
        return [
            //
        ];
    }
}
