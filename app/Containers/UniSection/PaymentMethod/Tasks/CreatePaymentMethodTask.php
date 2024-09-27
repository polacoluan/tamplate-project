<?php

namespace App\Containers\UniSection\PaymentMethod\Tasks;

use App\Containers\UniSection\PaymentMethod\Data\Repositories\PaymentMethodRepository;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodCreatedEvent;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class CreatePaymentMethodTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentMethodRepository $repository,
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): PaymentMethod
    {
        try {
            $paymentmethod = $this->repository->create($data);
            PaymentMethodCreatedEvent::dispatch($paymentmethod);

            return $paymentmethod;
        } catch (\Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
