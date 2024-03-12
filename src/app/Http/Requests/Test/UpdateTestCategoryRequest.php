<?php

declare(strict_types=1);

namespace App\Http\Requests\Test;


use App\Http\Requests\ApiRequests;

class UpdateTestCategoryRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title' => 'sometimes|string|min:3|max:500',
            'is_active' => 'boolean',
        ];
    }
}
