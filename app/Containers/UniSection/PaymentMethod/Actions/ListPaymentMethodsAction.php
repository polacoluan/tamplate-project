<?php

namespace App\Containers\UniSection\PaymentMethod\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\PaymentMethod\Tasks\ListPaymentMethodsTask;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\ListPaymentMethodsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentMethodsAction extends ParentAction
{
    public function __construct(
        private readonly ListPaymentMethodsTask $listPaymentMethodsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListPaymentMethodsRequest $request): mixed
    {
        return $this->listPaymentMethodsTask->run();
    }
}
