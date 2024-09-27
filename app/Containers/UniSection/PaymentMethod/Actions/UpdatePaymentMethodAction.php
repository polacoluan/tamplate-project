<?php

namespace App\Containers\UniSection\PaymentMethod\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Containers\UniSection\PaymentMethod\Tasks\UpdatePaymentMethodTask;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\UpdatePaymentMethodRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdatePaymentMethodAction extends ParentAction
{
    public function __construct(
        private readonly UpdatePaymentMethodTask $updatePaymentMethodTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdatePaymentMethodRequest $request): PaymentMethod
    {
        $data = $request->sanitizeInput([
            'method',
            'installments'
        ]);

        return $this->updatePaymentMethodTask->run($data, $request->id);
    }
}
