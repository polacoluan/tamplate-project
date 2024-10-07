<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreatePaymentMethodRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    protected array $decode = [
        'id',
    ];

    public function rules(): array
    {
        return [
            'method' => 'required|string',
            'installments' => 'required|integer'
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
