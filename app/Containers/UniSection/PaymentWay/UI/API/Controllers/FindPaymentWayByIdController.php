<?php

namespace App\Containers\UniSection\PaymentWay\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\PaymentWay\Actions\FindPaymentWayByIdAction;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\FindPaymentWayByIdRequest;
use App\Containers\UniSection\PaymentWay\UI\API\Transformers\PaymentWayTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindPaymentWayByIdController extends ApiController
{
    public function __construct(
        private readonly FindPaymentWayByIdAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function __invoke(FindPaymentWayByIdRequest $request): array
    {
        $paymentway = $this->action->run($request);

        return $this->transform($paymentway, PaymentWayTransformer::class);
    }
}
