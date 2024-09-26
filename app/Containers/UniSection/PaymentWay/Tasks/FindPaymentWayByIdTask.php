<?php

namespace App\Containers\UniSection\PaymentWay\Tasks;

use App\Containers\UniSection\PaymentWay\Data\Repositories\PaymentWayRepository;
use App\Containers\UniSection\PaymentWay\Events\PaymentWayFoundByIdEvent;
use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindPaymentWayByIdTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentWayRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): PaymentWay
    {
        try {
            $paymentway = $this->repository->find($id);
            PaymentWayFoundByIdEvent::dispatch($paymentway);

            return $paymentway;
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
