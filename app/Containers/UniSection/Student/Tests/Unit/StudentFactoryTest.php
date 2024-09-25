<?php

namespace App\Containers\UniSection\Student\Tests\Unit;

use App\Containers\UniSection\Student\Data\Factories\StudentFactory;
use App\Containers\UniSection\Student\Models\Student;
use App\Containers\UniSection\Student\Tests\UnitTestCase;

/**
 * @group student
 * @group unit
 */
class StudentFactoryTest extends UnitTestCase
{
    public function testCreateStudent(): void
    {
        $student = StudentFactory::new()->make();

        $this->assertInstanceOf(Student::class, $student);
    }
}
