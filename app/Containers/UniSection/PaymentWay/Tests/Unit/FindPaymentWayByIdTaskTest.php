<?php

namespace App\Containers\UniSection\PaymentWay\Tests\Unit;

use App\Containers\UniSection\PaymentWay\Data\Factories\PaymentWayFactory;
use App\Containers\UniSection\PaymentWay\Events\PaymentWayFoundByIdEvent;
use App\Containers\UniSection\PaymentWay\Tasks\FindPaymentWayByIdTask;
use App\Containers\UniSection\PaymentWay\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentway
 * @group unit
 */
class FindPaymentWayByIdTaskTest extends UnitTestCase
{
    public function testFindPaymentWayById(): void
    {
        Event::fake();
        $paymentWay = PaymentWayFactory::new()->createOne();

        $foundPaymentWay = app(FindPaymentWayByIdTask::class)->run($paymentWay->id);

        $this->assertEquals($paymentWay->id, $foundPaymentWay->id);
        Event::assertDispatched(PaymentWayFoundByIdEvent::class);
    }

    public function testFindPaymentWayWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(FindPaymentWayByIdTask::class)->run($noneExistingId);
    }
}
