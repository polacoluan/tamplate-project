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
class ListInstallmentsTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/installment';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testListInstallmentsByAdmin(): void
    {
        $this->getTestingUserWithoutAccess(createUserAsAdmin: true);
        InstallmentFactory::new()->count(2)->create();

        $response = $this->makeCall();

        $response->assertStatus(200);
        $responseContent = $this->getResponseContentObject();

        $this->assertCount(2, $responseContent->data);
    }

    // TODO TEST
    // add some roles and permissions to this route's request
    // then add them to the $access array above
    // uncomment this test to test accesses
    // public function testListInstallmentsByNonAdmin(): void
    // {
    //     $this->getTestingUserWithoutAccess();
    //     InstallmentFactory::new()->count(2)->create();
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
    // public function testSearchInstallmentsByFields(): void
    // {
    //     InstallmentFactory::new()->count(3)->create();
    //     // create a model with specific field values
    //     $installment = InstallmentFactory::new()->create([
    //         // 'name' => 'something',
    //     ]);
    //
    //     // search by the above values
    //     $response = $this->endpoint($this->endpoint . "?search=name:" . urlencode($installment->name))->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //             $json->has('data')
    //                 // ->where('data.0.name', $installment->name)
    //                 ->etc()
    //     );
    // }

    public function testSearchInstallmentsByHashID(): void
    {
        $installments = InstallmentFactory::new()->count(3)->create();
        $secondInstallment = $installments[1];

        $response = $this->endpoint($this->endpoint . '?search=id:' . $secondInstallment->getHashedKey())->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                     ->where('data.0.id', $secondInstallment->getHashedKey())
                    ->etc()
        );
    }
}
