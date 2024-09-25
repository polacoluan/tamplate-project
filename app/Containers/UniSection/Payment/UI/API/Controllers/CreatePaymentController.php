<?php

namespace App\Containers\UniSection\Payment\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Payment\Actions\CreatePaymentAction;
use App\Containers\UniSection\Payment\UI\API\Requests\CreatePaymentRequest;
use App\Containers\UniSection\Payment\UI\API\Transformers\PaymentTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreatePaymentController extends ApiController
{
    public function __construct(
        private readonly CreatePaymentAction $action,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreatePaymentRequest $request): JsonResponse
    {
        $payment = $this->action->run($request);

        return $this->created($this->transform($payment, PaymentTransformer::class));
    }
}
