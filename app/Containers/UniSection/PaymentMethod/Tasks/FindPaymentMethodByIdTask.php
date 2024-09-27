<?php

namespace App\Containers\UniSection\PaymentMethod\Tasks;

use App\Containers\UniSection\PaymentMethod\Data\Repositories\PaymentMethodRepository;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodFoundByIdEvent;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindPaymentMethodByIdTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentMethodRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): PaymentMethod
    {
        try {
            $paymentmethod = $this->repository->find($id);
            PaymentMethodFoundByIdEvent::dispatch($paymentmethod);

            return $paymentmethod;
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
