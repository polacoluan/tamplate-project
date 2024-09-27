<?php

namespace App\Containers\UniSection\Installment\Tasks;

use App\Containers\UniSection\Installment\Data\Repositories\InstallmentRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Illuminate\Database\Eloquent\Collection;

class FindInstallmentByPaymentIdTask extends ParentTask
{
    public function __construct(
        protected readonly InstallmentRepository $repository,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Collection
    {
        try {
            $installment = $this->repository->where('payment_id',$id)->get();

            return $installment;
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }
}
