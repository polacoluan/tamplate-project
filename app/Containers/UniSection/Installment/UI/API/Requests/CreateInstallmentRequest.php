<?php

namespace App\Containers\UniSection\Installment\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateInstallmentRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    protected array $decode = [
        'id',
        'payment_id'
    ];

    public function rules(): array
    {
        return [
            'payment_id' => 'required|integer',
            'installment' => 'required|integer',
            'amount' => 'required|decimal:2,2',
            'payment_date' => 'required|date'
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
