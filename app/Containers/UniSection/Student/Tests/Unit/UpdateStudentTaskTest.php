<?php

namespace App\Containers\UniSection\Student\Tests\Unit;

use App\Containers\UniSection\Student\Data\Factories\StudentFactory;
use App\Containers\UniSection\Student\Events\StudentUpdatedEvent;
use App\Containers\UniSection\Student\Tasks\UpdateStudentTask;
use App\Containers\UniSection\Student\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group student
 * @group unit
 */
class UpdateStudentTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdateStudent(): void
    {
        Event::fake();
        $student = StudentFactory::new()->createOne();
        $data = [
            // add some fillable fields here
            // 'some_field' => 'new_field_data',
        ];

        $updatedStudent = app(UpdateStudentTask::class)->run($data, $student->id);

        $this->assertEquals($student->id, $updatedStudent->id);
        // assert if fields are updated
        // $this->assertEquals($data['some_field'], $updatedStudent->some_field);
        Event::assertDispatched(StudentUpdatedEvent::class);
    }

    public function testUpdateStudentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(UpdateStudentTask::class)->run([], $noneExistingId);
    }
}
