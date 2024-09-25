<?php

namespace App\Containers\UniSection\Installment\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\Installment\Data\Repositories\InstallmentRepository;
use App\Containers\UniSection\Installment\Events\InstallmentsListedEvent;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class ListInstallmentsTask extends ParentTask
{
    public function __construct(
        protected readonly InstallmentRepository $repository,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $result = $this->repository->addRequestCriteria()->paginate();
        InstallmentsListedEvent::dispatch($result);

        return $result;
    }
}
