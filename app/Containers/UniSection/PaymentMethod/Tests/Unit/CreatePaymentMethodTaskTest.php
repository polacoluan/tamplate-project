<?php

namespace App\Containers\UniSection\PaymentMethod\Tests\Unit;

use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodCreatedEvent;
use App\Containers\UniSection\PaymentMethod\Tasks\CreatePaymentMethodTask;
use App\Containers\UniSection\PaymentMethod\Tests\UnitTestCase;
use App\Ship\Exceptions\CreateResourceFailedException;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentmethod
 * @group unit
 */
class CreatePaymentMethodTaskTest extends UnitTestCase
{
    public function testCreatePaymentMethod(): void
    {
        Event::fake();
        $data = [];

        $paymentMethod = app(CreatePaymentMethodTask::class)->run($data);

        $this->assertModelExists($paymentMethod);
        Event::assertDispatched(PaymentMethodCreatedEvent::class);
    }

    // TODO TEST
    // public function testCreatePaymentMethodWithInvalidData(): void
    // {
    //     $this->expectException(CreateResourceFailedException::class);
    //
    //     $data = [
    //         // put some invalid data here
    //         // 'invalid' => 'data',
    //     ];
    //
    //     app(CreatePaymentMethodTask::class)->run($data);
    // }
}
