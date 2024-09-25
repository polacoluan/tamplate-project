<?php

namespace App\Containers\UniSection\Student\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\Student\Data\Repositories\StudentRepository;
use App\Containers\UniSection\Student\Events\StudentsListedEvent;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class ListStudentsTask extends ParentTask
{
    public function __construct(
        protected readonly StudentRepository $repository,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $result = $this->repository->addRequestCriteria()->paginate();
        StudentsListedEvent::dispatch($result);

        return $result;
    }
}
