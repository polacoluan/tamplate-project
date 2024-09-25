<?php

namespace App\Containers\UniSection\Student\Tasks;

use App\Containers\UniSection\Student\Data\Repositories\StudentRepository;
use App\Containers\UniSection\Student\Events\StudentUpdatedEvent;
use App\Containers\UniSection\Student\Models\Student;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateStudentTask extends ParentTask
{
    public function __construct(
        protected readonly StudentRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Student
    {
        try {
            $student = $this->repository->update($data, $id);
            StudentUpdatedEvent::dispatch($student);

            return $student;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
