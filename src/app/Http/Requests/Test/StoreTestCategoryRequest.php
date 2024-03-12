<?php

declare(strict_types=1);

namespace App\Http\Requests\Test;

use App\Http\Requests\ApiRequests;
use Illuminate\Support\Facades\Config;

class StoreTestCategoryRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $languages = Config::get('languages');
        
        return [
            'title' => 'required|string|min:3|max:500',
            'is_active' => 'boolean',
            'locale' => 'string|in:' . implode(',', $languages),
        ];
    }
}
