<?php

namespace App\Containers\UniSection\Installment\Tasks;

use App\Containers\UniSection\Installment\Data\Repositories\InstallmentRepository;
use App\Containers\UniSection\Installment\Events\InstallmentFoundByIdEvent;
use App\Containers\UniSection\Installment\Models\Installment;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindInstallmentByIdTask extends ParentTask
{
    public function __construct(
        protected readonly InstallmentRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Installment
    {
        try {
            $installment = $this->repository->find($id);
            InstallmentFoundByIdEvent::dispatch($installment);

            return $installment;
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
