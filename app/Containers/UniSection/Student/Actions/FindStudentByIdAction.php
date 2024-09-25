<?php

namespace App\Containers\UniSection\Student\Actions;

use App\Containers\UniSection\Student\Models\Student;
use App\Containers\UniSection\Student\Tasks\FindStudentByIdTask;
use App\Containers\UniSection\Student\UI\API\Requests\FindStudentByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindStudentByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindStudentByIdTask $findStudentByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindStudentByIdRequest $request): Student
    {
        return $this->findStudentByIdTask->run($request->id);
    }
}
