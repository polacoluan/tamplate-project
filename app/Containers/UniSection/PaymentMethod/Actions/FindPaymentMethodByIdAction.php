<?php

namespace App\Containers\UniSection\PaymentMethod\Actions;

use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Containers\UniSection\PaymentMethod\Tasks\FindPaymentMethodByIdTask;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\FindPaymentMethodByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindPaymentMethodByIdAction extends ParentAction
{
    public function __construct(
        private readonly FindPaymentMethodByIdTask $findPaymentMethodByIdTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(FindPaymentMethodByIdRequest $request): PaymentMethod
    {
        return $this->findPaymentMethodByIdTask->run($request->id);
    }
}
