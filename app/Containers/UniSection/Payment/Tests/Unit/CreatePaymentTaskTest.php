<?php

namespace App\Containers\UniSection\Payment\Tests\Unit;

use App\Containers\UniSection\Payment\Events\PaymentCreatedEvent;
use App\Containers\UniSection\Payment\Tasks\CreatePaymentTask;
use App\Containers\UniSection\Payment\Tests\UnitTestCase;
use App\Ship\Exceptions\CreateResourceFailedException;
use Illuminate\Support\Facades\Event;

/**
 * @group payment
 * @group unit
 */
class CreatePaymentTaskTest extends UnitTestCase
{
    public function testCreatePayment(): void
    {
        Event::fake();
        $data = [];

        $payment = app(CreatePaymentTask::class)->run($data);

        $this->assertModelExists($payment);
        Event::assertDispatched(PaymentCreatedEvent::class);
    }

    // TODO TEST
    // public function testCreatePaymentWithInvalidData(): void
    // {
    //     $this->expectException(CreateResourceFailedException::class);
    //
    //     $data = [
    //         // put some invalid data here
    //         // 'invalid' => 'data',
    //     ];
    //
    //     app(CreatePaymentTask::class)->run($data);
    // }
}
