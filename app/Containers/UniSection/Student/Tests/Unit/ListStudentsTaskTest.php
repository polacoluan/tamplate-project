<?php

namespace App\Containers\UniSection\Student\Tests\Unit;

use App\Containers\UniSection\Student\Data\Factories\StudentFactory;
use App\Containers\UniSection\Student\Events\StudentsListedEvent;
use App\Containers\UniSection\Student\Tasks\ListStudentsTask;
use App\Containers\UniSection\Student\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Event;

/**
 * @group student
 * @group unit
 */
class ListStudentsTaskTest extends UnitTestCase
{
    public function testListStudents(): void
    {
        Event::fake();
        StudentFactory::new()->count(3)->create();

        $foundStudents = app(ListStudentsTask::class)->run();

        $this->assertCount(3, $foundStudents);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundStudents);
        Event::assertDispatched(StudentsListedEvent::class);
    }
}
