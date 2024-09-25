<?php

namespace App\Containers\UniSection\Payment\Tests\Unit;

use App\Containers\UniSection\Payment\Data\Factories\PaymentFactory;
use App\Containers\UniSection\Payment\Events\PaymentUpdatedEvent;
use App\Containers\UniSection\Payment\Tasks\UpdatePaymentTask;
use App\Containers\UniSection\Payment\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group payment
 * @group unit
 */
class UpdatePaymentTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdatePayment(): void
    {
        Event::fake();
        $payment = PaymentFactory::new()->createOne();
        $data = [
            // add some fillable fields here
            // 'some_field' => 'new_field_data',
        ];

        $updatedPayment = app(UpdatePaymentTask::class)->run($data, $payment->id);

        $this->assertEquals($payment->id, $updatedPayment->id);
        // assert if fields are updated
        // $this->assertEquals($data['some_field'], $updatedPayment->some_field);
        Event::assertDispatched(PaymentUpdatedEvent::class);
    }

    public function testUpdatePaymentWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(UpdatePaymentTask::class)->run([], $noneExistingId);
    }
}
