<?php

namespace App\Containers\UniSection\Installment\Tests\Unit;

use App\Containers\UniSection\Installment\Data\Factories\InstallmentFactory;
use App\Containers\UniSection\Installment\Events\InstallmentFoundByIdEvent;
use App\Containers\UniSection\Installment\Tasks\FindInstallmentByIdTask;
use App\Containers\UniSection\Installment\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group installment
 * @group unit
 */
class FindInstallmentByIdTaskTest extends UnitTestCase
{
    public function testFindInstallmentById(): void
    {
        Event::fake();
        $installment = InstallmentFactory::new()->createOne();

        $foundInstallment = app(FindInstallmentByIdTask::class)->run($installment->id);

        $this->assertEquals($installment->id, $foundInstallment->id);
        Event::assertDispatched(InstallmentFoundByIdEvent::class);
    }

    public function testFindInstallmentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(FindInstallmentByIdTask::class)->run($noneExistingId);
    }
}
