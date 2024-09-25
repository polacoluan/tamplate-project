<?php

namespace App\Containers\UniSection\Payment\Tasks;

use App\Containers\UniSection\Payment\Data\Repositories\PaymentRepository;
use App\Containers\UniSection\Payment\Events\PaymentFoundByIdEvent;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;

class FindPaymentByIdTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Payment
    {
        try {
            $payment = $this->repository->find($id);
            PaymentFoundByIdEvent::dispatch($payment);

            return $payment;
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
