<?php

declare(strict_types=1);

namespace App\Http\Requests\Company\Customer;

use App\Http\Requests\ApiRequests;

class StoreCustomerRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'code' => 'required|string|min:2|max:4',
            'name' => 'required|string|min:3|max:500',
            'name_en' => 'required|string|min:3|max:500',
            'partner_id' => 'required|integer',
            'start_date' => 'required|date',
            'maintain' => 'required|boolean',
            'status' => 'required|boolean',
        ];
    }
}
