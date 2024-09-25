<?php

namespace App\Containers\UniSection\Payment\Tasks;

use App\Containers\UniSection\Payment\Data\Repositories\PaymentRepository;
use App\Containers\UniSection\Payment\Events\PaymentUpdatedEvent;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdatePaymentTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Payment
    {
        try {
            $payment = $this->repository->update($data, $id);
            PaymentUpdatedEvent::dispatch($payment);

            return $payment;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
