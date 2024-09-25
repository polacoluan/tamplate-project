<?php

namespace App\Containers\UniSection\Student\Tests\Unit;

use App\Containers\UniSection\Student\Data\Factories\StudentFactory;
use App\Containers\UniSection\Student\Events\StudentFoundByIdEvent;
use App\Containers\UniSection\Student\Tasks\FindStudentByIdTask;
use App\Containers\UniSection\Student\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group student
 * @group unit
 */
class FindStudentByIdTaskTest extends UnitTestCase
{
    public function testFindStudentById(): void
    {
        Event::fake();
        $student = StudentFactory::new()->createOne();

        $foundStudent = app(FindStudentByIdTask::class)->run($student->id);

        $this->assertEquals($student->id, $foundStudent->id);
        Event::assertDispatched(StudentFoundByIdEvent::class);
    }

    public function testFindStudentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(FindStudentByIdTask::class)->run($noneExistingId);
    }
}
