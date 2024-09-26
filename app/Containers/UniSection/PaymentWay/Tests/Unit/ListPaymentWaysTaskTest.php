<?php

namespace App\Containers\UniSection\PaymentWay\Tests\Unit;

use App\Containers\UniSection\PaymentWay\Data\Factories\PaymentWayFactory;
use App\Containers\UniSection\PaymentWay\Events\PaymentWaysListedEvent;
use App\Containers\UniSection\PaymentWay\Tasks\ListPaymentWaysTask;
use App\Containers\UniSection\PaymentWay\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentway
 * @group unit
 */
class ListPaymentWaysTaskTest extends UnitTestCase
{
    public function testListPaymentWays(): void
    {
        Event::fake();
        PaymentWayFactory::new()->count(3)->create();

        $foundPaymentWays = app(ListPaymentWaysTask::class)->run();

        $this->assertCount(3, $foundPaymentWays);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundPaymentWays);
        Event::assertDispatched(PaymentWaysListedEvent::class);
    }
}
