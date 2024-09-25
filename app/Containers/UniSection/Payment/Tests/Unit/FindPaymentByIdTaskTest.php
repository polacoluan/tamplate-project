<?php

namespace App\Containers\UniSection\Payment\Tests\Unit;

use App\Containers\UniSection\Payment\Data\Factories\PaymentFactory;
use App\Containers\UniSection\Payment\Events\PaymentFoundByIdEvent;
use App\Containers\UniSection\Payment\Tasks\FindPaymentByIdTask;
use App\Containers\UniSection\Payment\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group payment
 * @group unit
 */
class FindPaymentByIdTaskTest extends UnitTestCase
{
    public function testFindPaymentById(): void
    {
        Event::fake();
        $payment = PaymentFactory::new()->createOne();

        $foundPayment = app(FindPaymentByIdTask::class)->run($payment->id);

        $this->assertEquals($payment->id, $foundPayment->id);
        Event::assertDispatched(PaymentFoundByIdEvent::class);
    }

    public function testFindPaymentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(FindPaymentByIdTask::class)->run($noneExistingId);
    }
}
