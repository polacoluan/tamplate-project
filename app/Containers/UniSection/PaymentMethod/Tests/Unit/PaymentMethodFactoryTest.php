<?php

namespace App\Containers\UniSection\PaymentMethod\Tests\Unit;

use App\Containers\UniSection\PaymentMethod\Data\Factories\PaymentMethodFactory;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Containers\UniSection\PaymentMethod\Tests\UnitTestCase;

/**
 * @group paymentmethod
 * @group unit
 */
class PaymentMethodFactoryTest extends UnitTestCase
{
    public function testCreatePaymentMethod(): void
    {
        $paymentMethod = PaymentMethodFactory::new()->make();

        $this->assertInstanceOf(PaymentMethod::class, $paymentMethod);
    }
}
