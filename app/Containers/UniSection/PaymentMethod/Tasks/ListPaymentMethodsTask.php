<?php

namespace App\Containers\UniSection\PaymentMethod\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\PaymentMethod\Data\Repositories\PaymentMethodRepository;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodsListedEvent;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentMethodsTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentMethodRepository $repository,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $result = $this->repository->addRequestCriteria()->paginate();
        PaymentMethodsListedEvent::dispatch($result);

        return $result;
    }
}
