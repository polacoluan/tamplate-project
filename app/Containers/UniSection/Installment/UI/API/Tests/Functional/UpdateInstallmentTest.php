<?php

namespace App\Containers\UniSection\Installment\UI\API\Tests\Functional;

use App\Containers\UniSection\Installment\Data\Factories\InstallmentFactory;
use App\Containers\UniSection\Installment\Models\Installment;
use App\Containers\UniSection\Installment\UI\API\Tests\ApiTestCase;
use Illuminate\Testing\Fluent\AssertableJson;

/**
 * @group installment
 * @group api
 */
class UpdateInstallmentTest extends ApiTestCase
{
    protected string $endpoint = 'patch@v1/installment/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    // TODO TEST
    public function testUpdateExistingInstallment(): void
    {
        $installment = InstallmentFactory::new()->create([
            // 'some_field' => 'new_field_value',
        ]);
        $data = [
            // 'some_field' => 'new_field_value',
        ];

        $response = $this->injectId($installment->id)->makeCall($data);

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.object', 'Installment')
                    ->where('data.id', $installment->getHashedKey())
                    // ->where('data.some_field', $data['some_field'])
                    ->etc()
        );
    }

    public function testUpdateNonExistingInstallment(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    // TODO TEST
    // public function testUpdateExistingInstallmentWithEmptyValues(): void
    // {
    //     $installment = InstallmentFactory::new()->createOne();
    //     $data = [
    //         // add some fillable fields here
    //         // 'first_field' => '',
    //         // 'second_field' => '',
    //     ];
    //
    //     $response = $this->injectId($installment->id)->makeCall($data);
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
