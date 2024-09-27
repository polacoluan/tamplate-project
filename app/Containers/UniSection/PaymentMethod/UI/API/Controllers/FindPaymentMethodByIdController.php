<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\PaymentMethod\Actions\FindPaymentMethodByIdAction;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\FindPaymentMethodByIdRequest;
use App\Containers\UniSection\PaymentMethod\UI\API\Transformers\PaymentMethodTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindPaymentMethodByIdController extends ApiController
{
    public function __construct(
        private readonly FindPaymentMethodByIdAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function __invoke(FindPaymentMethodByIdRequest $request): array
    {
        $paymentmethod = $this->action->run($request);

        return $this->transform($paymentmethod, PaymentMethodTransformer::class);
    }
}
