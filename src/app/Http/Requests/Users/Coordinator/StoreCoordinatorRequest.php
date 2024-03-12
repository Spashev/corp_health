<?php

declare(strict_types=1);

namespace App\Http\Requests\Users\Coordinator;

use App\Http\Requests\ApiRequests;

class StoreCoordinatorRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'middle_name' => 'string',
            'phone' => 'string|max:11',
            'access' => 'string|in:FULL,MOBILE',
            'country_id' => 'integer',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:4'
        ];
    }
}
