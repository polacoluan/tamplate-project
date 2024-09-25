<?php

namespace App\Containers\UniSection\Installment\UI\API\Controllers;

use App\Containers\UniSection\Installment\Actions\DeleteInstallmentAction;
use App\Containers\UniSection\Installment\UI\API\Requests\DeleteInstallmentRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteInstallmentController extends ApiController
{
    public function __construct(
        private readonly DeleteInstallmentAction $action,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeleteInstallmentRequest $request): JsonResponse
    {
        $this->action->run($request);

        return $this->noContent();
    }
}
