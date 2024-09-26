<?php

namespace App\Containers\UniSection\PaymentWay\Tasks;

use App\Containers\UniSection\PaymentWay\Data\Repositories\PaymentWayRepository;
use App\Containers\UniSection\PaymentWay\Events\PaymentWayDeletedEvent;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeletePaymentWayTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentWayRepository $repository,
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
            PaymentWayDeletedEvent::dispatch($result);

            return $result;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
