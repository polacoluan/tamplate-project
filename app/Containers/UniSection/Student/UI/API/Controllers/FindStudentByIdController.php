<?php

namespace App\Containers\UniSection\Student\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Student\Actions\FindStudentByIdAction;
use App\Containers\UniSection\Student\UI\API\Requests\FindStudentByIdRequest;
use App\Containers\UniSection\Student\UI\API\Transformers\StudentTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindStudentByIdController extends ApiController
{
    public function __construct(
        private readonly FindStudentByIdAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function __invoke(FindStudentByIdRequest $request): array
    {
        $student = $this->action->run($request);

        return $this->transform($student, StudentTransformer::class);
    }
}
