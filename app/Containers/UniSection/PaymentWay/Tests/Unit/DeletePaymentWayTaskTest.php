<?php

namespace App\Containers\UniSection\PaymentWay\Tests\Unit;

use App\Containers\UniSection\PaymentWay\Data\Factories\PaymentWayFactory;
use App\Containers\UniSection\PaymentWay\Events\PaymentWayDeletedEvent;
use App\Containers\UniSection\PaymentWay\Tasks\DeletePaymentWayTask;
use App\Containers\UniSection\PaymentWay\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentway
 * @group unit
 */
class DeletePaymentWayTaskTest extends UnitTestCase
{
    public function testDeletePaymentWay(): void
    {
        Event::fake();
        $paymentWay = PaymentWayFactory::new()->createOne();

        $result = app(DeletePaymentWayTask::class)->run($paymentWay->id);

        $this->assertEquals(1, $result);
        Event::assertDispatched(PaymentWayDeletedEvent::class);
    }

    public function testDeletePaymentWayWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(DeletePaymentWayTask::class)->run($noneExistingId);
    }
}
