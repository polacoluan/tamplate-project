<?php

namespace App\Containers\UniSection\PaymentMethod\Actions;

use App\Containers\UniSection\PaymentMethod\Tasks\DeletePaymentMethodTask;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\DeletePaymentMethodRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeletePaymentMethodAction extends ParentAction
{
    public function __construct(
        private readonly DeletePaymentMethodTask $deletePaymentMethodTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeletePaymentMethodRequest $request): int
    {
        return $this->deletePaymentMethodTask->run($request->id);
    }
}
