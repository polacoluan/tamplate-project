<?php

namespace App\Containers\UniSection\Installment\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class UpdateInstallmentRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    protected array $decode = [
        'id',
        'payment_id'
    ];

    protected array $urlParameters = [
        'id',
    ];

    public function rules(): array
    {
        return [
            'id' => 'required',
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
