<?php

declare(strict_types=1);

namespace App\Http\Requests\Location;

use App\Http\Requests\ApiRequests;

class StoreCountryRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'code' => 'string|min:2',
            'cities' => 'required|array',
            'cities.*.name' => 'required|string|max:255',
            'cities.*.postcode' => 'string',
        ];
    }
}
