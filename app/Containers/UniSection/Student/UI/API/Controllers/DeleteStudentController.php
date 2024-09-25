<?php

namespace App\Containers\UniSection\Student\UI\API\Controllers;

use App\Containers\UniSection\Student\Actions\DeleteStudentAction;
use App\Containers\UniSection\Student\UI\API\Requests\DeleteStudentRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteStudentController extends ApiController
{
    public function __construct(
        private readonly DeleteStudentAction $action,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteStudentRequest $request): JsonResponse
    {
        $this->action->run($request);

        return $this->noContent();
    }
}
