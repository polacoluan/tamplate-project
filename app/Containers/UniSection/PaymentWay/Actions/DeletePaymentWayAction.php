<?php

namespace App\Containers\UniSection\PaymentWay\Actions;

use App\Containers\UniSection\PaymentWay\Tasks\DeletePaymentWayTask;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\DeletePaymentWayRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeletePaymentWayAction extends ParentAction
{
    public function __construct(
        private readonly DeletePaymentWayTask $deletePaymentWayTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeletePaymentWayRequest $request): int
    {
        return $this->deletePaymentWayTask->run($request->id);
    }
}
