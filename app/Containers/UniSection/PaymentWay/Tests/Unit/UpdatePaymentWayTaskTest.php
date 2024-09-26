<?php

namespace App\Containers\UniSection\PaymentWay\Tests\Unit;

use App\Containers\UniSection\PaymentWay\Data\Factories\PaymentWayFactory;
use App\Containers\UniSection\PaymentWay\Events\PaymentWayUpdatedEvent;
use App\Containers\UniSection\PaymentWay\Tasks\UpdatePaymentWayTask;
use App\Containers\UniSection\PaymentWay\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentway
 * @group unit
 */
class UpdatePaymentWayTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdatePaymentWay(): void
    {
        Event::fake();
        $paymentWay = PaymentWayFactory::new()->createOne();
        $data = [
            // add some fillable fields here
            // 'some_field' => 'new_field_data',
        ];

        $updatedPaymentWay = app(UpdatePaymentWayTask::class)->run($data, $paymentWay->id);

        $this->assertEquals($paymentWay->id, $updatedPaymentWay->id);
        // assert if fields are updated
        // $this->assertEquals($data['some_field'], $updatedPaymentWay->some_field);
        Event::assertDispatched(PaymentWayUpdatedEvent::class);
    }

    public function testUpdatePaymentWayWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(UpdatePaymentWayTask::class)->run([], $noneExistingId);
    }
}
