<?php

namespace App\Containers\UniSection\Payment\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\Payment\Tasks\UpdatePaymentTask;
use App\Containers\UniSection\Payment\UI\API\Requests\UpdatePaymentRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdatePaymentAction extends ParentAction
{
    public function __construct(
        private readonly UpdatePaymentTask $updatePaymentTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdatePaymentRequest $request): Payment
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->updatePaymentTask->run($data, $request->id);
    }
}
