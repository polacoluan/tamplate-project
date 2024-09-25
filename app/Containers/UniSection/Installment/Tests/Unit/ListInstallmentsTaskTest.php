<?php

namespace App\Containers\UniSection\Installment\Tests\Unit;

use App\Containers\UniSection\Installment\Data\Factories\InstallmentFactory;
use App\Containers\UniSection\Installment\Events\InstallmentsListedEvent;
use App\Containers\UniSection\Installment\Tasks\ListInstallmentsTask;
use App\Containers\UniSection\Installment\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Event;

/**
 * @group installment
 * @group unit
 */
class ListInstallmentsTaskTest extends UnitTestCase
{
    public function testListInstallments(): void
    {
        Event::fake();
        InstallmentFactory::new()->count(3)->create();

        $foundInstallments = app(ListInstallmentsTask::class)->run();

        $this->assertCount(3, $foundInstallments);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundInstallments);
        Event::assertDispatched(InstallmentsListedEvent::class);
    }
}
