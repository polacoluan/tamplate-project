<?php

namespace App\Containers\UniSection\Installment\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\UniSection\Installment\Tasks\ListInstallmentsTask;
use App\Containers\UniSection\Installment\UI\API\Requests\ListInstallmentsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class ListInstallmentsAction extends ParentAction
{
    public function __construct(
        private readonly ListInstallmentsTask $listInstallmentsTask,
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(ListInstallmentsRequest $request): mixed
    {
        return $this->listInstallmentsTask->run();
    }
}
