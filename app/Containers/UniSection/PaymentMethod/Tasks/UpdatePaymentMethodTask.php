<?php

namespace App\Containers\UniSection\PaymentMethod\Tasks;

use App\Containers\UniSection\PaymentMethod\Data\Repositories\PaymentMethodRepository;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodUpdatedEvent;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdatePaymentMethodTask extends ParentTask
{
    public function __construct(
        protected readonly PaymentMethodRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): PaymentMethod
    {
        try {
            $paymentmethod = $this->repository->update($data, $id);
            PaymentMethodUpdatedEvent::dispatch($paymentmethod);

            return $paymentmethod;
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (\Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
