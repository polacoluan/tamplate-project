<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\PaymentMethod\Actions\UpdatePaymentMethodAction;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\UpdatePaymentMethodRequest;
use App\Containers\UniSection\PaymentMethod\UI\API\Transformers\PaymentMethodTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdatePaymentMethodController extends ApiController
{
    public function __construct(
        private readonly UpdatePaymentMethodAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdatePaymentMethodRequest $request): array
    {
        $paymentmethod = $this->action->run($request);

        return $this->transform($paymentmethod, PaymentMethodTransformer::class);
    }
}
