<?php

namespace App\Containers\UniSection\Student\Tests\Unit;

use App\Containers\UniSection\Student\Events\StudentCreatedEvent;
use App\Containers\UniSection\Student\Tasks\CreateStudentTask;
use App\Containers\UniSection\Student\Tests\UnitTestCase;
use App\Ship\Exceptions\CreateResourceFailedException;
use Illuminate\Support\Facades\Event;

/**
 * @group student
 * @group unit
 */
class CreateStudentTaskTest extends UnitTestCase
{
    public function testCreateStudent(): void
    {
        Event::fake();
        $data = [];

        $student = app(CreateStudentTask::class)->run($data);

        $this->assertModelExists($student);
        Event::assertDispatched(StudentCreatedEvent::class);
    }

    // TODO TEST
    // public function testCreateStudentWithInvalidData(): void
    // {
    //     $this->expectException(CreateResourceFailedException::class);
    //
    //     $data = [
    //         // put some invalid data here
    //         // 'invalid' => 'data',
    //     ];
    //
    //     app(CreateStudentTask::class)->run($data);
    // }
}
