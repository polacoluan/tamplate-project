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
class FindInstallmentByIdTest extends ApiTestCase
{
    protected string $endpoint = 'get@v1/installment/{id}';

    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    public function testFindInstallment(): void
    {
        $installment = InstallmentFactory::new()->createOne();

        $response = $this->injectId($installment->id)->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $this->encode($installment->id))
                    ->etc()
        );
    }

    public function testFindNonExistingInstallment(): void
    {
        $invalidId = 7777;

        $response = $this->injectId($invalidId)->makeCall([]);

        $response->assertStatus(404);
    }

    public function testFindFilteredInstallmentResponse(): void
    {
        $installment = InstallmentFactory::new()->createOne();

        $response = $this->injectId($installment->id)->endpoint($this->endpoint . '?filter=id')->makeCall();

        $response->assertStatus(200);
        $response->assertJson(
            fn (AssertableJson $json) =>
                $json->has('data')
                    ->where('data.id', $installment->getHashedKey())
                    ->missing('data.object')
        );
    }

    // TODO TEST
    // if your model have relationships which can be included into the response then
    // uncomment this test
    // modify it to your needs
    // test the relation
    // public function testFindInstallmentWithRelation(): void
    // {
    //     $installment = InstallmentFactory::new()->createOne();
    //     $relation = 'roles';
    //
    //     $response = $this->injectId($installment->id)->endpoint($this->endpoint . "?include=$relation")->makeCall();
    //
    //     $response->assertStatus(200);
    //     $response->assertJson(
    //         fn (AssertableJson $json) =>
    //           $json->has('data')
    //               ->where('data.id', $installment->getHashedKey())
    //               ->count("data.$relation.data", 1)
    //               ->where("data.$relation.data.0.name", 'something')
    //               ->etc()
    //     );
    // }
}
