<?php

namespace App\Containers\UniSection\PaymentMethod\Tests\Unit;

use App\Containers\UniSection\PaymentMethod\Data\Factories\PaymentMethodFactory;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodsListedEvent;
use App\Containers\UniSection\PaymentMethod\Tasks\ListPaymentMethodsTask;
use App\Containers\UniSection\PaymentMethod\Tests\UnitTestCase;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentmethod
 * @group unit
 */
class ListPaymentMethodsTaskTest extends UnitTestCase
{
    public function testListPaymentMethods(): void
    {
        Event::fake();
        PaymentMethodFactory::new()->count(3)->create();

        $foundPaymentMethods = app(ListPaymentMethodsTask::class)->run();

        $this->assertCount(3, $foundPaymentMethods);
        $this->assertInstanceOf(LengthAwarePaginator::class, $foundPaymentMethods);
        Event::assertDispatched(PaymentMethodsListedEvent::class);
    }
}
