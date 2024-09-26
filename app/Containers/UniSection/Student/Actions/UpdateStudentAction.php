<?php

namespace App\Containers\UniSection\Student\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\Student\Models\Student;
use App\Containers\UniSection\Student\Tasks\UpdateStudentTask;
use App\Containers\UniSection\Student\UI\API\Requests\UpdateStudentRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateStudentAction extends ParentAction
{
    public function __construct(
        private readonly UpdateStudentTask $updateStudentTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateStudentRequest $request): Student
    {
        $data = $request->sanitizeInput([
            'name',
            'email',
            'cellphone',
            'birth_date',
            'cpf'
        ]);

        return $this->updateStudentTask->run($data, $request->id);
    }
}
