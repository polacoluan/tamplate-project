<?php

namespace App\Containers\UniSection\Payment\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Payment\Actions\ListPaymentsAction;
use App\Containers\UniSection\Payment\UI\API\Requests\ListPaymentsRequest;
use App\Containers\UniSection\Payment\UI\API\Transformers\PaymentTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentsController extends ApiController
{
    public function __construct(
        private readonly ListPaymentsAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListPaymentsRequest $request): array
    {
        $payments = $this->action->run($request);

        return $this->transform($payments, PaymentTransformer::class);
    }
}
