<?php

namespace App\Containers\UniSection\PaymentWay\Tasks;

use App\Containers\UniSection\PaymentWay\Data\Repositories\PaymentWayRepository;
use App\Containers\UniSection\PaymentWay\Events\PaymentWayUpdatedEvent;
use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdatePaymentWayTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentWayRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): PaymentWay
    {
        try {
            $paymentway = $this->repository->update($data, $id);
            PaymentWayUpdatedEvent::dispatch($paymentway);

            return $paymentway;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
