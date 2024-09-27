<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Tests\Functional;

use App\Containers\UniSection\PaymentMethod\Data\Factories\PaymentMethodFactory;
use App\Containers\UniSection\PaymentMethod\Models\PaymentMethod;
use App\Containers\UniSection\PaymentMethod\UI\API\Tests\ApiTestCase;
use Illuminate\Testing\Fluent\AssertableJson;

/**
 * @group paymentmethod
 * @group api
 */
class ListPaymentMethodsTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/payment-methods';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testListPaymentMethodsByAdmin(): void
    {
        $this->getTestingUserWithoutAccess(createUserAsAdmin: true);
        PaymentMethodFactory::new()->count(2)->create();

        $response = $this->makeCall();

        $response->assertStatus(200);
        $responseContent = $this->getResponseContentObject();

        $this->assertCount(2, $responseContent->data);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testListPaymentMethodsByNonAdmin(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     PaymentMethodFactory::new()->count(2)->create();
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
    // public function testSearchPaymentMethodsByFields(): void
    // {
    //     PaymentMethodFactory::new()->count(3)->create();
    //     // create a model with specific field values
    //     $paymentMethod = PaymentMethodFactory::new()->create([
    //         // 'name' => 'something',
    //     ]);
    //
    //     // search by the above values
    //     $response = $this->endpoint($this->endpoint . "?search=name:" . urlencode($paymentMethod->name))->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //             $json->has('data')
    //                 // ->where('data.0.name', $paymentMethod->name)
    //                 ->etc()
    //     );
    // }

    public function testSearchPaymentMethodsByHashID(): void
    {
        $paymentmethods = PaymentMethodFactory::new()->count(3)->create();
        $secondPaymentMethod = $paymentmethods[1];

        $response = $this->endpoint($this->endpoint . '?search=id:' . $secondPaymentMethod->getHashedKey())->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                     ->where('data.0.id', $secondPaymentMethod->getHashedKey())
                    ->etc()
        );
    }
}
