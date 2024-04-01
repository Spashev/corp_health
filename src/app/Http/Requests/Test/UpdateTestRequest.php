<?php

declare(strict_types=1);

namespace App\Http\Requests\Test;

use App\Http\Requests\ApiRequests;
use Illuminate\Support\Facades\Config;

class UpdateTestRequest extends ApiRequests
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $languages = Config::get('languages');
        
        return [
            'title' => 'sometimes|string|min:3|max:500',
            'description' => 'nullable|string',
            'keywords' => 'nullable|string',
            'category_id' => 'sometimes|integer|exists:test_categories,id',
            'is_active' => 'boolean',
            'questions' => 'sometimes|array',
            'questions.*.id' => 'sometimes|integer',
            'questions.*.title' => 'sometimes|string|min:3',
            'questions.*.answers' => 'sometimes|array',
            'questions.*.answers.*.answer' => 'sometimes|string',
            'questions.*.answers.*.ball' => 'sometimes|integer',
            'results' => 'sometimes|array',
            'results.*.id' => 'sometimes|integer',
            'results.*.ball' => 'sometimes|integer',
            'results.*.description' => 'sometimes|string',
            'locale' => 'string|in:' . implode(',', $languages),
        ];
    }
}
