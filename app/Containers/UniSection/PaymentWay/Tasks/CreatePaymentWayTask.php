<?php

namespace App\Containers\UniSection\PaymentWay\Tasks;

use App\Containers\UniSection\PaymentWay\Data\Repositories\PaymentWayRepository;
use App\Containers\UniSection\PaymentWay\Events\PaymentWayCreatedEvent;
use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreatePaymentWayTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentWayRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): PaymentWay
    {
        try {
            $paymentway = $this->repository->create($data);
            PaymentWayCreatedEvent::dispatch($paymentway);

            return $paymentway;
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
