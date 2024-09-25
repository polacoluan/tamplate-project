<?php

namespace App\Containers\UniSection\Installment\Actions;

use App\Containers\UniSection\Installment\Tasks\DeleteInstallmentTask;
use App\Containers\UniSection\Installment\UI\API\Requests\DeleteInstallmentRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteInstallmentAction extends ParentAction
{
    public function __construct(
        private readonly DeleteInstallmentTask $deleteInstallmentTask,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteInstallmentRequest $request): int
    {
        return $this->deleteInstallmentTask->run($request->id);
    }
}
