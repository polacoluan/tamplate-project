<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Tests\Functional;

use App\Containers\UniSection\PaymentMethod\Data\Factories\PaymentMethodFactory;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Containers\UniSection\PaymentMethod\UI\API\Tests\ApiTestCase;

/**
 * @group paymentmethod
 * @group api
 */
class DeletePaymentMethodTest extends ApiTestCase
{
    protected string $endpoint = 'delete@v1/payment-methods/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testDeleteExistingPaymentMethod(): void
    {
        $paymentMethod = PaymentMethodFactory::new()->createOne();

        $response = $this->injectId($paymentMethod->id)->makeCall();

        $response->assertStatus(204);
    }

    public function testDeleteNonExistingPaymentMethod(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testGivenHaveNoAccess_CannotDeletePaymentMethod(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     $paymentMethod = PaymentMethodFactory::new()->createOne();
    //
    //     $response = $this->injectId($paymentMethod->id)->makeCall();
    //
    //     $response->assertStatus(403);
    // }
}
