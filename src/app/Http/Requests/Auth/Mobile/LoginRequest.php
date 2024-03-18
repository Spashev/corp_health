<?php

namespace App\Http\Requests\Auth\Mobile;

use App\Http\Requests\ApiRequests;

class LoginRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'code' => 'sometimes|string',
            'email' => 'sometimes|email',
            'password' => 'sometimes|string'
        ];
    }
}
