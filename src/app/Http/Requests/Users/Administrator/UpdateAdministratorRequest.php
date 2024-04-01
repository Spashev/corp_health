<?php

declare(strict_types=1);

namespace App\Http\Requests\Users\Administrator;

use App\Http\Requests\ApiRequests;

class UpdateAdministratorRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'first_name' => 'sometimes|string|min:3',
            'last_name' => 'sometimes|string|min:3',
            'middle_name' => 'sometimes|string',
            'phone' => 'sometimes|string|max:11',
            'access' => 'sometimes|string|in:FULL,MOBILE',
            'country_id' => 'sometimes|integer|exists:countries,id',
            'city_id' => 'sometimes|integer|exists:cities,id',
            'email' => 'sometimes|email|unique:users,email',
            'password' => 'sometimes|string|confirmed|min:4'
        ];
    }
}
