<?php

namespace App\Containers\UniSection\Student\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\Student\Models\Student;
use App\Containers\UniSection\Student\Tasks\CreateStudentTask;
use App\Containers\UniSection\Student\UI\API\Requests\CreateStudentRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateStudentAction extends ParentAction
{
    public function __construct(
        private readonly CreateStudentTask $createStudentTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateStudentRequest $request): Student
    {
        $data = $request->sanitizeInput([
            "name",
            "email",
            "cellphone",
            "birth_date",
            "cpf"
        ]);

        return $this->createStudentTask->run($data);
    }
}
