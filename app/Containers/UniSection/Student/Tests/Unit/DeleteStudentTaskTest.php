<?php

namespace App\Containers\UniSection\Student\Tests\Unit;

use App\Containers\UniSection\Student\Data\Factories\StudentFactory;
use App\Containers\UniSection\Student\Events\StudentDeletedEvent;
use App\Containers\UniSection\Student\Tasks\DeleteStudentTask;
use App\Containers\UniSection\Student\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group student
 * @group unit
 */
class DeleteStudentTaskTest extends UnitTestCase
{
    public function testDeleteStudent(): void
    {
        Event::fake();
        $student = StudentFactory::new()->createOne();

        $result = app(DeleteStudentTask::class)->run($student->id);

        $this->assertEquals(1, $result);
        Event::assertDispatched(StudentDeletedEvent::class);
    }

    public function testDeleteStudentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(DeleteStudentTask::class)->run($noneExistingId);
    }
}
