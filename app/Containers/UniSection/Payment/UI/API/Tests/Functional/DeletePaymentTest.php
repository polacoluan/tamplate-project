<?php

namespace App\Containers\UniSection\Payment\UI\API\Tests\Functional;

use App\Containers\UniSection\Payment\Data\Factories\PaymentFactory;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\Payment\UI\API\Tests\ApiTestCase;

/**
 * @group payment
 * @group api
 */
class DeletePaymentTest extends ApiTestCase
{
    protected string $endpoint = 'delete@v1/payment/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testDeleteExistingPayment(): void
    {
        $payment = PaymentFactory::new()->createOne();

        $response = $this->injectId($payment->id)->makeCall();

        $response->assertStatus(204);
    }

    public function testDeleteNonExistingPayment(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testGivenHaveNoAccess_CannotDeletePayment(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     $payment = PaymentFactory::new()->createOne();
    //
    //     $response = $this->injectId($payment->id)->makeCall();
    //
    //     $response->assertStatus(403);
    // }
}
