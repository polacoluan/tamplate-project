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
class FindPaymentByIdTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/payment/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testFindPayment(): void
    {
        $payment = PaymentFactory::new()->createOne();

        $response = $this->injectId($payment->id)->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $this->encode($payment->id))
                    ->etc()
        );
    }

    public function testFindNonExistingPayment(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    public function testFindFilteredPaymentResponse(): void
    {
        $payment = PaymentFactory::new()->createOne();

        $response = $this->injectId($payment->id)->endpoint($this->endpoint . '?filter=id')->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $payment->getHashedKey())
                    ->missing('data.object')
        );
    }

    // TODO TEST
    // if your model have relationships which can be included into the response then
    // uncomment this test
    // modify it to your needs
    // test the relation
    // public function testFindPaymentWithRelation(): void
    // {
    //     $payment = PaymentFactory::new()->createOne();
    //     $relation = 'roles';
    //
    //     $response = $this->injectId($payment->id)->endpoint($this->endpoint . "?include=$relation")->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //           $json->has('data')
    //               ->where('data.id', $payment->getHashedKey())
    //               ->count("data.$relation.data", 1)
    //               ->where("data.$relation.data.0.name", 'something')
    //               ->etc()
    //     );
    // }
}
