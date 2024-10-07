<?php

namespace App\Containers\UniSection\Student\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateStudentRequest extends ParentRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'cellphone' => 'required|string|max:15',
            'birth_date' => 'required|date',
            'cpf' => 'required|string|max:14'
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
