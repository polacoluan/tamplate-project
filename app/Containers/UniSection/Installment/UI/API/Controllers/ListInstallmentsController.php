<?php

namespace App\Containers\UniSection\Installment\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Installment\Actions\ListInstallmentsAction;
use App\Containers\UniSection\Installment\UI\API\Requests\ListInstallmentsRequest;
use App\Containers\UniSection\Installment\UI\API\Transformers\InstallmentTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class ListInstallmentsController extends ApiController
{
    public function __construct(
        private readonly ListInstallmentsAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function __invoke(ListInstallmentsRequest $request): array
    {
        $installments = $this->action->run($request);

        return $this->transform($installments, InstallmentTransformer::class);
    }
}
