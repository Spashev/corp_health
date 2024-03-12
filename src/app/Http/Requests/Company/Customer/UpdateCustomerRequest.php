<?php

declare(strict_types=1);

namespace App\Http\Requests\Company\Customer;

use App\Http\Requests\ApiRequests;

class UpdateCustomerRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'code' => 'sometimes|string|min:2|max:4',
            'name' => 'sometimes|string|min:3|max:500',
            'name_en' => 'sometimes|string|min:3|max:500',
            'partner_id' => 'sometimes|integer',
            'start_date' => 'sometimes|date',
            'maintain' => 'boolean',
            'status' => 'boolean',
        ];
    }
}
