<?php

namespace App\Containers\UniSection\Payment\UI\API\Controllers;

use App\Containers\UniSection\Payment\Actions\DeletePaymentAction;
use App\Containers\UniSection\Payment\UI\API\Requests\DeletePaymentRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeletePaymentController extends ApiController
{
    public function __construct(
        private readonly DeletePaymentAction $action,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeletePaymentRequest $request): JsonResponse
    {
        $this->action->run($request);

        return $this->noContent();
    }
}
