<?php

namespace App\Containers\UniSection\PaymentWay\Actions;

use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Containers\UniSection\PaymentWay\Tasks\FindPaymentWayByIdTask;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\FindPaymentWayByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindPaymentWayByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindPaymentWayByIdTask $findPaymentWayByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindPaymentWayByIdRequest $request): PaymentWay
    {
        return $this->findPaymentWayByIdTask->run($request->id);
    }
}
