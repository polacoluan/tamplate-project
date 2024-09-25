<?php

namespace App\Containers\UniSection\Installment\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Installment\Actions\UpdateInstallmentAction;
use App\Containers\UniSection\Installment\UI\API\Requests\UpdateInstallmentRequest;
use App\Containers\UniSection\Installment\UI\API\Transformers\InstallmentTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateInstallmentController extends ApiController
{
    public function __construct(
        private readonly UpdateInstallmentAction $action
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function __invoke(UpdateInstallmentRequest $request): array
    {
        $installment = $this->action->run($request);

        return $this->transform($installment, InstallmentTransformer::class);
    }
}
