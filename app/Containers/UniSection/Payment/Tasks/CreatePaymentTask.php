<?php

namespace App\Containers\UniSection\Payment\Tasks;

use App\Containers\UniSection\Payment\Data\Repositories\PaymentRepository;
use App\Containers\UniSection\Payment\Events\PaymentCreatedEvent;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreatePaymentTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Payment
    {
        try {
            $payment = $this->repository->create($data);
            PaymentCreatedEvent::dispatch($payment);

            return $payment;
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
