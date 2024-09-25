<?php

namespace App\Containers\UniSection\Student\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\Student\Tasks\ListStudentsTask;
use App\Containers\UniSection\Student\UI\API\Requests\ListStudentsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListStudentsAction extends ParentAction
{
    public function __construct(
        private readonly ListStudentsTask $listStudentsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListStudentsRequest $request): mixed
    {
        return $this->listStudentsTask->run();
    }
}
