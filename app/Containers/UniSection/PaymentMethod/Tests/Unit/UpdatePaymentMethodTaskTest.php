<?php

namespace App\Containers\UniSection\PaymentMethod\Tests\Unit;

use App\Containers\UniSection\PaymentMethod\Data\Factories\PaymentMethodFactory;
use App\Containers\UniSection\PaymentMethod\Events\PaymentMethodUpdatedEvent;
use App\Containers\UniSection\PaymentMethod\Tasks\UpdatePaymentMethodTask;
use App\Containers\UniSection\PaymentMethod\Tests\UnitTestCase;
use App\Ship\Exceptions\NotFoundException;
use Illuminate\Support\Facades\Event;

/**
 * @group paymentmethod
 * @group unit
 */
class UpdatePaymentMethodTaskTest extends UnitTestCase
{
    // TODO TEST
    public function testUpdatePaymentMethod(): void
    {
        Event::fake();
        $paymentMethod = PaymentMethodFactory::new()->createOne();
        $data = [
            // add some fillable fields here
            // 'some_field' => 'new_field_data',
        ];

        $updatedPaymentMethod = app(UpdatePaymentMethodTask::class)->run($data, $paymentMethod->id);

        $this->assertEquals($paymentMethod->id, $updatedPaymentMethod->id);
        // assert if fields are updated
        // $this->assertEquals($data['some_field'], $updatedPaymentMethod->some_field);
        Event::assertDispatched(PaymentMethodUpdatedEvent::class);
    }

    public function testUpdatePaymentMethodWithInvalidId(): void
    {
        $this->expectException(NotFoundException::class);

        $noneExistingId = 777777;

        app(UpdatePaymentMethodTask::class)->run([], $noneExistingId);
    }
}
