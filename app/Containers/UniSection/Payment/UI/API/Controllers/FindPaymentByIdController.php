<?php

namespace App\Containers\UniSection\Payment\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Payment\Actions\FindPaymentByIdAction;
use App\Containers\UniSection\Payment\UI\API\Requests\FindPaymentByIdRequest;
use App\Containers\UniSection\Payment\UI\API\Transformers\PaymentTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindPaymentByIdController extends ApiController
{
    public function __construct(
        private readonly FindPaymentByIdAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function __invoke(FindPaymentByIdRequest $request): array
    {
        $payment = $this->action->run($request);

        return $this->transform($payment, PaymentTransformer::class);
    }
}
