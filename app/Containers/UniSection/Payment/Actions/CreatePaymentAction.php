<?php

namespace App\Containers\UniSection\Payment\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\Payment\Tasks\CreatePaymentTask;
use App\Containers\UniSection\Payment\UI\API\Requests\CreatePaymentRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePaymentAction extends ParentAction
{
    public function __construct(
        private readonly CreatePaymentTask $createPaymentTask,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePaymentRequest $request): Payment
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->createPaymentTask->run($data);
    }
}
