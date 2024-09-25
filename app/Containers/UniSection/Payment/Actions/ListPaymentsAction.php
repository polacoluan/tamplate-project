<?php

namespace App\Containers\UniSection\Payment\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\Payment\Tasks\ListPaymentsTask;
use App\Containers\UniSection\Payment\UI\API\Requests\ListPaymentsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListPaymentsAction extends ParentAction
{
    public function __construct(
        private readonly ListPaymentsTask $listPaymentsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListPaymentsRequest $request): mixed
    {
        return $this->listPaymentsTask->run();
    }
}
