<?php

namespace App\Containers\UniSection\Payment\Actions;

use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\Payment\Tasks\FindPaymentByIdTask;
use App\Containers\UniSection\Payment\UI\API\Requests\FindPaymentByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindPaymentByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindPaymentByIdTask $findPaymentByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindPaymentByIdRequest $request): Payment
    {
        return $this->findPaymentByIdTask->run($request->id);
    }
}
