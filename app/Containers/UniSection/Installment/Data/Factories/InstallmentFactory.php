<?php

namespace App\Containers\UniSection\Installment\Data\Factories;

use App\Containers\UniSection\Installment\Models\Installment;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of InstallmentFactory
 *
 * @extends ParentFactory<TModel>
 */
class InstallmentFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Installment::class;

    public function definition(): array
    {
        return [
            //
        ];
    }
}
