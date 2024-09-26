<?php

namespace App\Containers\UniSection\PaymentWay\UI\API\Tests\Functional;

use App\Containers\UniSection\PaymentWay\Data\Factories\PaymentWayFactory;
use App\Containers\UniSection\PaymentWay\Models\PaymentWay;
use App\Containers\UniSection\PaymentWay\UI\API\Tests\ApiTestCase;
use Illuminate\Testing\Fluent\AssertableJson;

/**
 * @group paymentway
 * @group api
 */
class ListPaymentWaysTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/payment-ways';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testListPaymentWaysByAdmin(): void
    {
        $this->getTestingUserWithoutAccess(createUserAsAdmin: true);
        PaymentWayFactory::new()->count(2)->create();

        $response = $this->makeCall();

        $response->assertStatus(200);
        $responseContent = $this->getResponseContentObject();

        $this->assertCount(2, $responseContent->data);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testListPaymentWaysByNonAdmin(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     PaymentWayFactory::new()->count(2)->create();
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
    // public function testSearchPaymentWaysByFields(): void
    // {
    //     PaymentWayFactory::new()->count(3)->create();
    //     // create a model with specific field values
    //     $paymentWay = PaymentWayFactory::new()->create([
    //         // 'name' => 'something',
    //     ]);
    //
    //     // search by the above values
    //     $response = $this->endpoint($this->endpoint . "?search=name:" . urlencode($paymentWay->name))->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //             $json->has('data')
    //                 // ->where('data.0.name', $paymentWay->name)
    //                 ->etc()
    //     );
    // }

    public function testSearchPaymentWaysByHashID(): void
    {
        $paymentways = PaymentWayFactory::new()->count(3)->create();
        $secondPaymentWay = $paymentways[1];

        $response = $this->endpoint($this->endpoint . '?search=id:' . $secondPaymentWay->getHashedKey())->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                     ->where('data.0.id', $secondPaymentWay->getHashedKey())
                    ->etc()
        );
    }
}
