<?php

namespace App\Containers\UniSection\Payment\Data\Factories;

use App\Containers\UniSection\Payment\Models\Payment;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of PaymentFactory
 *
 * @extends ParentFactory<TModel>
 */
class PaymentFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Payment::class;

    public function definition(): array
    {
        return [
            //
        ];
    }
}
