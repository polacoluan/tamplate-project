<?php

namespace App\Containers\UniSection\Student\Tasks;

use App\Containers\UniSection\Student\Data\Repositories\StudentRepository;
use App\Containers\UniSection\Student\Events\StudentCreatedEvent;
use App\Containers\UniSection\Student\Models\Student;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateStudentTask extends ParentTask
{
    public function __construct(
        protected readonly StudentRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Student
    {
        try {
            $student = $this->repository->create($data);            
            StudentCreatedEvent::dispatch($student);

            return $student;
        } catch (\Exception $e){
            throw new CreateResourceFailedException($e->getMessage());
        }
    }
}
