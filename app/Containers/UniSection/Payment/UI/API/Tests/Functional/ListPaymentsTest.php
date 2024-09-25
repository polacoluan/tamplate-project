<?php

namespace App\Containers\UniSection\Payment\UI\API\Tests\Functional;

use App\Containers\UniSection\Payment\Data\Factories\PaymentFactory;
use App\Containers\UniSection\Payment\Models\Payment;
use App\Containers\UniSection\Payment\UI\API\Tests\ApiTestCase;
use Illuminate\Testing\Fluent\AssertableJson;

/**
 * @group payment
 * @group api
 */
class ListPaymentsTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/payment';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testListPaymentsByAdmin(): void
    {
        $this->getTestingUserWithoutAccess(createUserAsAdmin: true);
        PaymentFactory::new()->count(2)->create();

        $response = $this->makeCall();

        $response->assertStatus(200);
        $responseContent = $this->getResponseContentObject();

        $this->assertCount(2, $responseContent->data);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testListPaymentsByNonAdmin(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     PaymentFactory::new()->count(2)->create();
    //
    //     $response = $this->makeCall();
    //
    //     $response->assertStatus(403);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //             $json->has('message')
    //                 ->where('message', 'This action is unauthorized.')
    //                 ->etc()
    //     );
    // }

    // TODO TEST
    // public function testSearchPaymentsByFields(): void
    // {
    //     PaymentFactory::new()->count(3)->create();
    //     // create a model with specific field values
    //     $payment = PaymentFactory::new()->create([
    //         // 'name' => 'something',
    //     ]);
    //
    //     // search by the above values
    //     $response = $this->endpoint($this->endpoint . "?search=name:" . urlencode($payment->name))->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //             $json->has('data')
    //                 // ->where('data.0.name', $payment->name)
    //                 ->etc()
    //     );
    // }

    public function testSearchPaymentsByHashID(): void
    {
        $payments = PaymentFactory::new()->count(3)->create();
        $secondPayment = $payments[1];

        $response = $this->endpoint($this->endpoint . '?search=id:' . $secondPayment->getHashedKey())->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                     ->where('data.0.id', $secondPayment->getHashedKey())
                    ->etc()
        );
    }
}
