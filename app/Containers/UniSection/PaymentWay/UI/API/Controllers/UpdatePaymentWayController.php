<?php

namespace App\Containers\UniSection\PaymentWay\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\PaymentWay\Actions\UpdatePaymentWayAction;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\UpdatePaymentWayRequest;
use App\Containers\UniSection\PaymentWay\UI\API\Transformers\PaymentWayTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdatePaymentWayController extends ApiController
{
    public function __construct(
        private readonly UpdatePaymentWayAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdatePaymentWayRequest $request): array
    {
        $paymentway = $this->action->run($request);

        return $this->transform($paymentway, PaymentWayTransformer::class);
    }
}
