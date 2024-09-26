<?php

namespace App\Containers\UniSection\PaymentWay\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Containers\UniSection\PaymentWay\Tasks\UpdatePaymentWayTask;
use App\Containers\UniSection\PaymentWay\UI\API\Requests\UpdatePaymentWayRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdatePaymentWayAction extends ParentAction
{
    public function __construct(
        private readonly UpdatePaymentWayTask $updatePaymentWayTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdatePaymentWayRequest $request): PaymentWay
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->updatePaymentWayTask->run($data, $request->id);
    }
}
