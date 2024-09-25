<?php

namespace App\Containers\UniSection\Student\Tasks;

use App\Containers\UniSection\Student\Data\Repositories\StudentRepository;
use App\Containers\UniSection\Student\Events\StudentFoundByIdEvent;
use App\Containers\UniSection\Student\Models\Student;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindStudentByIdTask extends ParentTask
{
    public function __construct(
        protected readonly StudentRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Student
    {
        try {
            $student = $this->repository->find($id);
            StudentFoundByIdEvent::dispatch($student);

            return $student;
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
