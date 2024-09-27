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
class FindPaymentMethodByIdTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/payment-methods/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testFindPaymentMethod(): void
    {
        $paymentMethod = PaymentMethodFactory::new()->createOne();

        $response = $this->injectId($paymentMethod->id)->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $this->encode($paymentMethod->id))
                    ->etc()
        );
    }

    public function testFindNonExistingPaymentMethod(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    public function testFindFilteredPaymentMethodResponse(): void
    {
        $paymentMethod = PaymentMethodFactory::new()->createOne();

        $response = $this->injectId($paymentMethod->id)->endpoint($this->endpoint . '?filter=id')->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $paymentMethod->getHashedKey())
                    ->missing('data.object')
        );
    }

    // TODO TEST
    // if your model have relationships which can be included into the response then
    // uncomment this test
    // modify it to your needs
    // test the relation
    // public function testFindPaymentMethodWithRelation(): void
    // {
    //     $paymentMethod = PaymentMethodFactory::new()->createOne();
    //     $relation = 'roles';
    //
    //     $response = $this->injectId($paymentMethod->id)->endpoint($this->endpoint . "?include=$relation")->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //           $json->has('data')
    //               ->where('data.id', $paymentMethod->getHashedKey())
    //               ->count("data.$relation.data", 1)
    //               ->where("data.$relation.data.0.name", 'something')
    //               ->etc()
    //     );
    // }
}
