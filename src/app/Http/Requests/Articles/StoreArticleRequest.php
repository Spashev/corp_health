<?php

declare(strict_types=1);

namespace App\Http\Requests\Articles;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3|max:500',
            'keywords' => 'string|min:3|max:255',
            'description' => 'string',
            'label_url' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'article_category_id' => 'required|integer|exists:article_categories,id',
        ];
    }
}
