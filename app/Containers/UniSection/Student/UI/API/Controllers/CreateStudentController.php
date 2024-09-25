<?php

namespace App\Containers\UniSection\Student\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Student\Actions\CreateStudentAction;
use App\Containers\UniSection\Student\UI\API\Requests\CreateStudentRequest;
use App\Containers\UniSection\Student\UI\API\Transformers\StudentTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateStudentController extends ApiController
{
    public function __construct(
        private readonly CreateStudentAction $action,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateStudentRequest $request): JsonResponse
    {
        $student = $this->action->run($request);

        return $this->created($this->transform($student, StudentTransformer::class));
    }
}
