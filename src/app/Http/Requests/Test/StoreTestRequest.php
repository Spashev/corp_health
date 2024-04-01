<?php

declare(strict_types=1);

namespace App\Http\Requests\Test;

use App\Http\Requests\ApiRequests;
use Illuminate\Support\Facades\Config;

class StoreTestRequest extends ApiRequests
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
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
            'category_id' => 'required|integer|exists:test_categories,id',
            'is_active' => 'boolean',
            'questions' => 'required|array',
            'questions.*.title' => 'required|string|min:3',
            'questions.*.answers' => 'required|array',
            'questions.*.answers.*.answer' => 'required|string',
            'questions.*.answers.*.ball' => 'required|integer',
            'results' => 'required|array',
            'results.*.ball' => 'required|integer',
            'results.*.description' => 'required|string',
            'locale' => 'required|string|in:' . implode(',', $languages),
        ];
    }
}
