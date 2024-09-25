<?php

namespace App\Containers\UniSection\Installment\Tests\Unit;

use App\Containers\UniSection\Installment\Data\Factories\InstallmentFactory;
use App\Containers\UniSection\Installment\Events\InstallmentDeletedEvent;
use App\Containers\UniSection\Installment\Tasks\DeleteInstallmentTask;
use App\Containers\UniSection\Installment\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group installment
 * @group unit
 */
class DeleteInstallmentTaskTest extends UnitTestCase
{
    public function testDeleteInstallment(): void
    {
        Event::fake();
        $installment = InstallmentFactory::new()->createOne();

        $result = app(DeleteInstallmentTask::class)->run($installment->id);

        $this->assertEquals(1, $result);
        Event::assertDispatched(InstallmentDeletedEvent::class);
    }

    public function testDeleteInstallmentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(DeleteInstallmentTask::class)->run($noneExistingId);
    }
}
