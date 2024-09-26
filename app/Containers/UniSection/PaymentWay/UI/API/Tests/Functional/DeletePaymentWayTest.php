<?php

namespace App\Containers\UniSection\PaymentWay\UI\API\Tests\Functional;

use App\Containers\UniSection\PaymentWay\Data\Factories\PaymentWayFactory;
use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Containers\UniSection\PaymentWay\UI\API\Tests\ApiTestCase;

/**
 * @group paymentway
 * @group api
 */
class DeletePaymentWayTest extends ApiTestCase
{
    protected string $endpoint = 'delete@v1/payment-ways/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testDeleteExistingPaymentWay(): void
    {
        $paymentWay = PaymentWayFactory::new()->createOne();

        $response = $this->injectId($paymentWay->id)->makeCall();

        $response->assertStatus(204);
    }

    public function testDeleteNonExistingPaymentWay(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testGivenHaveNoAccess_CannotDeletePaymentWay(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     $paymentWay = PaymentWayFactory::new()->createOne();
    //
    //     $response = $this->injectId($paymentWay->id)->makeCall();
    //
    //     $response->assertStatus(403);
    // }
}
