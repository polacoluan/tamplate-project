<?php

namespace App\Containers\UniSection\Installment\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\UniSection\Installment\Actions\CreateInstallmentAction;
use App\Containers\UniSection\Installment\UI\API\Requests\CreateInstallmentRequest;
use App\Containers\UniSection\Installment\UI\API\Transformers\InstallmentTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateInstallmentController extends ApiController
{
    public function __construct(
        private readonly CreateInstallmentAction $action,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function __invoke(CreateInstallmentRequest $request): JsonResponse
    {
        $installment = $this->action->run($request);

        return $this->created($this->transform($installment, InstallmentTransformer::class));
    }
}
