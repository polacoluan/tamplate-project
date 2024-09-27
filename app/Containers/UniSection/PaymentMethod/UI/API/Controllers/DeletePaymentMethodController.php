<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Controllers;

use App\Containers\UniSection\PaymentMethod\Actions\DeletePaymentMethodAction;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\DeletePaymentMethodRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeletePaymentMethodController extends ApiController
{
    public function __construct(
        private readonly DeletePaymentMethodAction $action,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function __invoke(DeletePaymentMethodRequest $request): JsonResponse
    {
        $this->action->run($request);

        return $this->noContent();
    }
}
