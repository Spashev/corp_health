<?php

declare(strict_types=1);

namespace App\Http\Resources\Tests;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetTestsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
