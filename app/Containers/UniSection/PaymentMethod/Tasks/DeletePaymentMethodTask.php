<?php

namespace App\Containers\UniSection\PaymentMethod\Tasks;

use App\Containers\UniSection\PaymentMethod\Data\Repositories\PaymentMethodRepository;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodDeletedEvent;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeletePaymentMethodTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentMethodRepository $repository,
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): int
    {
        try {
            $result = $this->repository->delete($id);
            PaymentMethodDeletedEvent::dispatch($result);

            return $result;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
