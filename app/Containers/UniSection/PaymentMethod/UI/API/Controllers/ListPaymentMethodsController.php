<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\PaymentMethod\Actions\ListPaymentMethodsAction;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\ListPaymentMethodsRequest;
use App\Containers\UniSection\PaymentMethod\UI\API\Transformers\PaymentMethodTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentMethodsController extends ApiController
{
    public function __construct(
        private readonly ListPaymentMethodsAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListPaymentMethodsRequest $request): array
    {
        $paymentmethods = $this->action->run($request);

        return $this->transform($paymentmethods, PaymentMethodTransformer::class);
    }
}
