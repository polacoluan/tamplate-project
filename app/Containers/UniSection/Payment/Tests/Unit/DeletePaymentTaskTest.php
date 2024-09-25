<?php

namespace App\Containers\UniSection\Payment\Tests\Unit;

use App\Containers\UniSection\Payment\Data\Factories\PaymentFactory;
use App\Containers\UniSection\Payment\Events\PaymentDeletedEvent;
use App\Containers\UniSection\Payment\Tasks\DeletePaymentTask;
use App\Containers\UniSection\Payment\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group payment
 * @group unit
 */
class DeletePaymentTaskTest extends UnitTestCase
{
    public function testDeletePayment(): void
    {
        Event::fake();
        $payment = PaymentFactory::new()->createOne();

        $result = app(DeletePaymentTask::class)->run($payment->id);

        $this->assertEquals(1, $result);
        Event::assertDispatched(PaymentDeletedEvent::class);
    }

    public function testDeletePaymentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(DeletePaymentTask::class)->run($noneExistingId);
    }
}
