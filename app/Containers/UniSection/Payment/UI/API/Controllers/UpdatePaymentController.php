<?php

namespace App\Containers\UniSection\Payment\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Payment\Actions\UpdatePaymentAction;
use App\Containers\UniSection\Payment\UI\API\Requests\UpdatePaymentRequest;
use App\Containers\UniSection\Payment\UI\API\Transformers\PaymentTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdatePaymentController extends ApiController
{
    public function __construct(
        private readonly UpdatePaymentAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdatePaymentRequest $request): array
    {
        $payment = $this->action->run($request);

        return $this->transform($payment, PaymentTransformer::class);
    }
}
