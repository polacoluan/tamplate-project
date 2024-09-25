<?php

namespace App\Containers\UniSection\Payment\Tests\Unit;

use App\Containers\UniSection\Payment\Data\Factories\PaymentFactory;
use App\Containers\UniSection\Payment\Events\PaymentsListedEvent;
use App\Containers\UniSection\Payment\Tasks\ListPaymentsTask;
use App\Containers\UniSection\Payment\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Event;

/**
 * @group payment
 * @group unit
 */
class ListPaymentsTaskTest extends UnitTestCase
{
    public function testListPayments(): void
    {
        Event::fake();
        PaymentFactory::new()->count(3)->create();

        $foundPayments = app(ListPaymentsTask::class)->run();

        $this->assertCount(3, $foundPayments);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundPayments);
        Event::assertDispatched(PaymentsListedEvent::class);
    }
}
