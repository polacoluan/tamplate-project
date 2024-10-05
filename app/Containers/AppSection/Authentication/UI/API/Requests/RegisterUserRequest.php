<?php

namespace App\Containers\AppSection\Authentication\UI\API\Requests;

use App\Containers\AppSection\User\Enums\Gender;
use App\Ship\Parents\Requests\Request as ParentRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class RegisterUserRequest extends ParentRequest
{
    protected array $access = [
        'permissions' => null,
        'roles' => null,
    ];

    protected array $decode = [];

    protected array $urlParameters = [];

    public function rules(): array
    {
        return [
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                Password::min(8)->letters()->mixedCase()->numbers()->symbols(),
            ],
            'name' => 'min:2|max:50',
            'gender' => Rule::enum(Gender::class),
            'birth' => 'date',
            'verification_url' => [
                'url',
                Rule::requiredIf(static fn(): bool => config('appSection-authentication.require_email_verification')),
                Rule::in(config('appSection-authentication.allowed-verify-email-urls')),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'O campo email é obrigatório.',
            'email.unique' => 'Esse email já está em uso.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter no mínimo :min caracteres.',
            'password.letters' => 'A senha deve conter pelo menos uma letra.',
            'password.mixed_case' => 'A senha deve conter letras maiúsculas e minúsculas.',
            'password.numbers' => 'A senha deve conter pelo menos um número.',
            'password.symbols' => 'A senha deve conter pelo menos um símbolo.',
            'name.min' => 'O nome precisa ter no mínimo 2 caracteres.',
            'verification_url.required_if' => 'O campo de URL de verificação é obrigatório.',
            'verification_url.url' => 'O campo de URL de verificação deve ser uma URL válida.',
            'verification_url.in' => 'O campo de URL de verificação deve ser uma das URLs permitidas.'
        ];
    }

    public function authorize(): bool
    {
        return $this->hasAccess();
    }
}
