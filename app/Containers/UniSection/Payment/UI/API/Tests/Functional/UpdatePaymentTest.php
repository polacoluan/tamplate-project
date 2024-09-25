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
class UpdatePaymentTest extends ApiTestCase
{
    protected string $endpoint = 'patch@v1/payment/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    // TODO TEST
    public function testUpdateExistingPayment(): void
    {
        $payment = PaymentFactory::new()->create([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $response = $this->injectId($payment->id)->makeCall($data);

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.object', 'Payment')
                    ->where('data.id', $payment->getHashedKey())
                    // ->where('data.some_field', $data['some_field'])
                    ->etc()
        );
    }

    public function testUpdateNonExistingPayment(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    // TODO TEST
    // public function testUpdateExistingPaymentWithEmptyValues(): void
    // {
    //     $payment = PaymentFactory::new()->createOne();
    //     $data = [
    //         // add some fillable fields here
    //         // 'first_field' => '',
    //         // 'second_field' => '',
    //     ];
    //
    //     $response = $this->injectId($payment->id)->makeCall($data);
    //
    //     $response->assertStatus(422);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //         $json->has('errors')
    //             // ->where('errors.first_field.0', 'assert validation errors')
    //             // ->where('errors.second_field.0', 'assert validation errors')
    //             ->etc()
    //     );
    // }
}
