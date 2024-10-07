<?php

namespace App\Containers\UniSection\Payment\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class UpdatePaymentRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    protected array $decode = [
        'id',
        'student_id',
        'payment_method_id'
    ];

    protected array $urlParameters = [
        'id',
    ];

    public function rules(): array
    {
        return [
            'id' => 'required',
            'student_id' => 'required|integer',
            'amount' => 'required',
            'payment_method_id' => 'required|integer'
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
