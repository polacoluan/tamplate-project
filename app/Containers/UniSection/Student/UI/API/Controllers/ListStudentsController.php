<?php

namespace App\Containers\UniSection\Student\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Student\Actions\ListStudentsAction;
use App\Containers\UniSection\Student\UI\API\Requests\ListStudentsRequest;
use App\Containers\UniSection\Student\UI\API\Transformers\StudentTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListStudentsController extends ApiController
{
    public function __construct(
        private readonly ListStudentsAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListStudentsRequest $request): array
    {
        $students = $this->action->run($request);

        return $this->transform($students, StudentTransformer::class);
    }
}
