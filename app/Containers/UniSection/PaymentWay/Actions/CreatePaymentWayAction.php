<?php

namespace App\Containers\UniSection\PaymentWay\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Containers\UniSection\PaymentWay\Tasks\CreatePaymentWayTask;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\CreatePaymentWayRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePaymentWayAction extends ParentAction
{
    public function __construct(
        private readonly CreatePaymentWayTask $createPaymentWayTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePaymentWayRequest $request): PaymentWay
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->createPaymentWayTask->run($data);
    }
}
