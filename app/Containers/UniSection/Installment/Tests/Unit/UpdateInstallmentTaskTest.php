<?php

namespace App\Containers\UniSection\Installment\Tests\Unit;

use App\Containers\UniSection\Installment\Data\Factories\InstallmentFactory;
use App\Containers\UniSection\Installment\Events\InstallmentUpdatedEvent;
use App\Containers\UniSection\Installment\Tasks\UpdateInstallmentTask;
use App\Containers\UniSection\Installment\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group installment
 * @group unit
 */
class UpdateInstallmentTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdateInstallment(): void
    {
        Event::fake();
        $installment = InstallmentFactory::new()->createOne();
        $data = [
            // add some fillable fields here
            // 'some_field' => 'new_field_data',
        ];

        $updatedInstallment = app(UpdateInstallmentTask::class)->run($data, $installment->id);

        $this->assertEquals($installment->id, $updatedInstallment->id);
        // assert if fields are updated
        // $this->assertEquals($data['some_field'], $updatedInstallment->some_field);
        Event::assertDispatched(InstallmentUpdatedEvent::class);
    }

    public function testUpdateInstallmentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(UpdateInstallmentTask::class)->run([], $noneExistingId);
    }
}
