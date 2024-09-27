<?php

namespace App\Containers\UniSection\PaymentMethod\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Containers\UniSection\PaymentMethod\Tasks\CreatePaymentMethodTask;
use App\Containers\UniSection\PaymentMethod\UI\API\Requests\CreatePaymentMethodRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePaymentMethodAction extends ParentAction
{
    public function __construct(
        private readonly CreatePaymentMethodTask $createPaymentMethodTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePaymentMethodRequest $request): PaymentMethod
    {
        $data = $request->sanitizeInput([
            'method',
            'installments'
        ]);

        return $this->createPaymentMethodTask->run($data);
    }
}
