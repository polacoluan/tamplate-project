<?php

namespace App\Containers\UniSection\PaymentWay\Tests\Unit;

use App\Containers\UniSection\PaymentWay\Events\PaymentWayCreatedEvent;
use App\Containers\UniSection\PaymentWay\Tasks\CreatePaymentWayTask;
use App\Containers\UniSection\PaymentWay\Tests\UnitTestCase;
use App\Ship\Exceptions\CreateResourceFailedException;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentway
 * @group unit
 */
class CreatePaymentWayTaskTest extends UnitTestCase
{
    public function testCreatePaymentWay(): void
    {
        Event::fake();
        $data = [];

        $paymentWay = app(CreatePaymentWayTask::class)->run($data);

        $this->assertModelExists($paymentWay);
        Event::assertDispatched(PaymentWayCreatedEvent::class);
    }

    // TODO TEST
    // public function testCreatePaymentWayWithInvalidData(): void
    // {
    //     $this->expectException(CreateResourceFailedException::class);
    //
    //     $data = [
    //         // put some invalid data here
    //         // 'invalid' => 'data',
    //     ];
    //
    //     app(CreatePaymentWayTask::class)->run($data);
    // }
}
