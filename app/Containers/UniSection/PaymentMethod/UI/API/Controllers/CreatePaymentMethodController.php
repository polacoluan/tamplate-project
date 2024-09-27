<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\PaymentMethod\Actions\CreatePaymentMethodAction;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\CreatePaymentMethodRequest;
use App\Containers\UniSection\PaymentMethod\UI\API\Transformers\PaymentMethodTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreatePaymentMethodController extends ApiController
{
    public function __construct(
        private readonly CreatePaymentMethodAction $action,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreatePaymentMethodRequest $request): JsonResponse
    {
        $paymentmethod = $this->action->run($request);

        return $this->created($this->transform($paymentmethod, PaymentMethodTransformer::class));
    }
}
