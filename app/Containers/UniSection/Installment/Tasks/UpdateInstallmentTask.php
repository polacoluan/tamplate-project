<?php

namespace App\Containers\UniSection\Installment\Tasks;

use App\Containers\UniSection\Installment\Data\Repositories\InstallmentRepository;
use App\Containers\UniSection\Installment\Events\InstallmentUpdatedEvent;
use App\Containers\UniSection\Installment\Models\Installment;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateInstallmentTask extends ParentTask
{
    public function __construct(
        protected readonly InstallmentRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Installment
    {
        try {
            $installment = $this->repository->update($data, $id);
            InstallmentUpdatedEvent::dispatch($installment);

            return $installment;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
