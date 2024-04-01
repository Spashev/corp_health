<?php

declare(strict_types=1);

namespace App\Http\Requests\Location;

use App\Http\Requests\ApiRequests;

class UpdateCountryRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
            'code' => 'string|min:2',
            'cities' => 'sometimes|array',
            'cities.*.name' => 'sometimes|string|max:255',
            'cities.*.postcode' => 'string',
        ];
    }
}
