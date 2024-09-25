<?php

namespace App\Containers\UniSection\Installment\Tasks;

use App\Containers\UniSection\Installment\Data\Repositories\InstallmentRepository;
use App\Containers\UniSection\Installment\Events\InstallmentCreatedEvent;
use App\Containers\UniSection\Installment\Models\Installment;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreateInstallmentTask extends ParentTask
{
    public function __construct(
        protected readonly InstallmentRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Installment
    {
        try {
            $installment = $this->repository->create($data);
            InstallmentCreatedEvent::dispatch($installment);

            return $installment;
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
