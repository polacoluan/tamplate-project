<?php

namespace App\Containers\UniSection\PaymentWay\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\PaymentWay\Tasks\ListPaymentWaysTask;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\ListPaymentWaysRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentWaysAction extends ParentAction
{
    public function __construct(
        private readonly ListPaymentWaysTask $listPaymentWaysTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListPaymentWaysRequest $request): mixed
    {
        return $this->listPaymentWaysTask->run();
    }
}
