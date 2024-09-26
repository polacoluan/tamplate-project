<?php

namespace App\Containers\UniSection\PaymentWay\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\PaymentWay\Actions\ListPaymentWaysAction;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\ListPaymentWaysRequest;
use App\Containers\UniSection\PaymentWay\UI\API\Transformers\PaymentWayTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentWaysController extends ApiController
{
    public function __construct(
        private readonly ListPaymentWaysAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListPaymentWaysRequest $request): array
    {
        $paymentways = $this->action->run($request);

        return $this->transform($paymentways, PaymentWayTransformer::class);
    }
}
