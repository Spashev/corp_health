<?php

declare(strict_types=1);

namespace App\Http\Resources\Article;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetArticlesResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "title"=> $this->title,
            "keywords"=> $this->keywords,
            "description"=> $this->description,
            "label_url"=> $this->label_url,
            "article_category_id"=> $this->article_category_id,
            "is_active"=> $this->is_active,
            "locale"=> $this->locale,
            "created_at"=> $this->created_at,
        ];
    }
}
