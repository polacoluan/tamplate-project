<?php

namespace App\Containers\UniSection\PaymentMethod\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class UpdatePaymentMethodRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    protected array $decode = [
        'id',
    ];

    protected array $urlParameters = [
        'id',
    ];

    public function rules(): array
    {
        return [
            'id' => 'required',
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
