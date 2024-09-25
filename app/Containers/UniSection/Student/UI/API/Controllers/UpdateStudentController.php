<?php

namespace App\Containers\UniSection\Student\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Student\Actions\UpdateStudentAction;
use App\Containers\UniSection\Student\UI\API\Requests\UpdateStudentRequest;
use App\Containers\UniSection\Student\UI\API\Transformers\StudentTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateStudentController extends ApiController
{
    public function __construct(
        private readonly UpdateStudentAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateStudentRequest $request): array
    {
        $student = $this->action->run($request);

        return $this->transform($student, StudentTransformer::class);
    }
}
