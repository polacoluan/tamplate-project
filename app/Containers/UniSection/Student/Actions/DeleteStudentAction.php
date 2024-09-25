<?php

namespace App\Containers\UniSection\Student\Actions;

use App\Containers\UniSection\Student\Tasks\DeleteStudentTask;
use App\Containers\UniSection\Student\UI\API\Requests\DeleteStudentRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteStudentAction extends ParentAction
{
    public function __construct(
        private readonly DeleteStudentTask $deleteStudentTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteStudentRequest $request): int
    {
        return $this->deleteStudentTask->run($request->id);
    }
}
