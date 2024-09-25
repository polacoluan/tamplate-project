<?php

namespace App\Containers\UniSection\Installment\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Installment\Actions\FindInstallmentByIdAction;
use App\Containers\UniSection\Installment\UI\API\Requests\FindInstallmentByIdRequest;
use App\Containers\UniSection\Installment\UI\API\Transformers\InstallmentTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindInstallmentByIdController extends ApiController
{
    public function __construct(
        private readonly FindInstallmentByIdAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function __invoke(FindInstallmentByIdRequest $request): array
    {
        $installment = $this->action->run($request);

        return $this->transform($installment, InstallmentTransformer::class);
    }
}
