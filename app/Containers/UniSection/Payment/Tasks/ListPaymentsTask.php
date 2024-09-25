<?php

namespace App\Containers\UniSection\Payment\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\Payment\Data\Repositories\PaymentRepository;
use App\Containers\UniSection\Payment\Events\PaymentsListedEvent;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentsTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentRepository $repository,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $result = $this->repository->addRequestCriteria()->paginate();
        PaymentsListedEvent::dispatch($result);

        return $result;
    }
}
