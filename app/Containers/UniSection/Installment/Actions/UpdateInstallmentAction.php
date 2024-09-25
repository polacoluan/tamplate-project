<?php

namespace App\Containers\UniSection\Installment\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\UniSection\Installment\Models\Installment;
use App\Containers\UniSection\Installment\Tasks\UpdateInstallmentTask;
use App\Containers\UniSection\Installment\UI\API\Requests\UpdateInstallmentRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateInstallmentAction extends ParentAction
{
    public function __construct(
        private readonly UpdateInstallmentTask $updateInstallmentTask,
    ) {
    }

    /**
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateInstallmentRequest $request): Installment
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return $this->updateInstallmentTask->run($data, $request->id);
    }
}
