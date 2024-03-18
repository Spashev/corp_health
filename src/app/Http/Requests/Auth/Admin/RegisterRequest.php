<?php

namespace App\Http\Requests\Auth\Admin;


use App\Http\Requests\ApiRequests;

class RegisterRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'middle_name' => 'string',
            'phone' => 'string|max:11',
            'role' => 'string|in:CLIENT,CONSULTANT,COORDINATOR,ADMINISTRATOR',
            'access' => 'string|in:FULL,MOBILE',
            'country_id' => 'integer',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed|min:4'
        ];
    }
}
