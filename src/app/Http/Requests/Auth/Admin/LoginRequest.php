<?php

namespace App\Http\Requests\Auth\Admin;

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
            'email' => 'required|email',
            'password' => 'required'
        ];
    }
}
