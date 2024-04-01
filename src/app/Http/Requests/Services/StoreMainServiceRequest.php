<?php

declare(strict_types=1);

namespace App\Http\Requests\Services;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Config;

class StoreMainServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $languages = Config::get('languages');
        
        return [
            'name' => 'required|string|min:3|max:500',
            'offer' => 'string|min:3|max:500',
            'description' => 'string',
            'is_active' => 'boolean',
            'locale' => 'required|string|in:' . implode(',', $languages),
            'label_url' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'type' => 'required|string'
        ];
    }
}
