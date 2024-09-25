<?php

namespace App\Containers\UniSection\Student\Data\Factories;

use App\Containers\UniSection\Student\Models\Student;
use App\Ship\Parents\Factories\Factory as ParentFactory;

/**
 * @template TModel of StudentFactory
 *
 * @extends ParentFactory<TModel>
 */
class StudentFactory extends ParentFactory
{
    /** @var class-string<TModel> */
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            //
        ];
    }
}
