<?php

namespace App\Containers\UniSection\PaymentWay\UI\API\Controllers;

use App\Containers\UniSection\PaymentWay\Actions\DeletePaymentWayAction;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\DeletePaymentWayRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeletePaymentWayController extends ApiController
{
    public function __construct(
        private readonly DeletePaymentWayAction $action,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeletePaymentWayRequest $request): JsonResponse
    {
        $this->action->run($request);

        return $this->noContent();
    }
}
