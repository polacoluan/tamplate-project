<?php

namespace App\Containers\UniSection\PaymentWay\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\PaymentWay\Actions\CreatePaymentWayAction;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\CreatePaymentWayRequest;
use App\Containers\UniSection\PaymentWay\UI\API\Transformers\PaymentWayTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreatePaymentWayController extends ApiController
{
    public function __construct(
        private readonly CreatePaymentWayAction $action,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreatePaymentWayRequest $request): JsonResponse
    {
        $paymentway = $this->action->run($request);

        return $this->created($this->transform($paymentway, PaymentWayTransformer::class));
    }
}
