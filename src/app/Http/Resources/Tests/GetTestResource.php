<?php

declare(strict_types=1);

namespace App\Http\Resources\Tests;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetTestResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category_id' => $this->category_id,
            'is_active' => $this->is_active,
            'locale' => $this->locale,
            'questions' => $this->questions->map(function ($question) {
                return [
                    'id' => $question->id,
                    'title' => $question->title,
                    'answers' => $question->answers->map(function ($answer) {
                        return [
                            'id' => $answer->id,
                            'answer' => $answer->answer,
                            'ball' => $answer->ball,
                        ];
                    }),
                ];
            }),
            'results' => $this->results->map(function ($result) {
                return [
                    'id' => $result->id,
                    'ball' => $result->ball,
                    'description' => $result->description,
                ];
            }),
        ];
    }
}
