<?php

namespace App\Containers\UniSection\Installment\Tasks;

use App\Containers\UniSection\Installment\Data\Repositories\InstallmentRepository;
use App\Containers\UniSection\Installment\Events\InstallmentDeletedEvent;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteInstallmentTask extends ParentTask
{
    public function __construct(
        protected readonly InstallmentRepository $repository,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): int
    {
        try {
            $result = $this->repository->delete($id);
            InstallmentDeletedEvent::dispatch($result);

            return $result;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
