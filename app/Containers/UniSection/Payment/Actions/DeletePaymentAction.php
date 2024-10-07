<?php

namespace App\Containers\UniSection\Payment\Actions;

use App\Containers\UniSection\Installment\Tasks\DeleteInstallmentTask;
use App\Containers\UniSection\Installment\Tasks\FindInstallmentByPaymentIdTask;
use App\Containers\UniSection\Payment\Tasks\DeletePaymentTask;
use App\Containers\UniSection\Payment\UI\API\Requests\DeletePaymentRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeletePaymentAction extends ParentAction
{
    public function __construct(
        private readonly DeletePaymentTask $deletePaymentTask,
        private readonly DeleteInstallmentTask $deleteInstallmentTask,
        private readonly FindInstallmentByPaymentIdTask $findInstallmentByPaymentIdTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeletePaymentRequest $request): int
    {   
        return $this->deletePaymentTask->run($request->id);
    }
}
