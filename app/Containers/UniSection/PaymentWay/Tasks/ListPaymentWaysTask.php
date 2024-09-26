<?php

namespace App\Containers\UniSection\PaymentWay\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\PaymentWay\Data\Repositories\PaymentWayRepository;
use App\Containers\UniSection\PaymentWay\Events\PaymentWaysListedEvent;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentWaysTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentWayRepository $repository,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $result = $this->repository->addRequestCriteria()->paginate();
        PaymentWaysListedEvent::dispatch($result);

        return $result;
    }
}
