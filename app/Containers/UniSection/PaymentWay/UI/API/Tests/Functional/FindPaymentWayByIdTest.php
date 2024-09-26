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
class FindPaymentWayByIdTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/payment-ways/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testFindPaymentWay(): void
    {
        $paymentWay = PaymentWayFactory::new()->createOne();

        $response = $this->injectId($paymentWay->id)->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $this->encode($paymentWay->id))
                    ->etc()
        );
    }

    public function testFindNonExistingPaymentWay(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    public function testFindFilteredPaymentWayResponse(): void
    {
        $paymentWay = PaymentWayFactory::new()->createOne();

        $response = $this->injectId($paymentWay->id)->endpoint($this->endpoint . '?filter=id')->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $paymentWay->getHashedKey())
                    ->missing('data.object')
        );
    }

    // TODO TEST
    // if your model have relationships which can be included into the response then
    // uncomment this test
    // modify it to your needs
    // test the relation
    // public function testFindPaymentWayWithRelation(): void
    // {
    //     $paymentWay = PaymentWayFactory::new()->createOne();
    //     $relation = 'roles';
    //
    //     $response = $this->injectId($paymentWay->id)->endpoint($this->endpoint . "?include=$relation")->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //           $json->has('data')
    //               ->where('data.id', $paymentWay->getHashedKey())
    //               ->count("data.$relation.data", 1)
    //               ->where("data.$relation.data.0.name", 'something')
    //               ->etc()
    //     );
    // }
}
