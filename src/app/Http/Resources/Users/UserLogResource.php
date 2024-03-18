<?php

declare(strict_types=1);

namespace App\Http\Resources\Users;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserLogResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'full_name' => $this->full_name,
            'role' => $this->role,
            'action' => $this->action,
            'date' => $this->created_at,
        ];
    }
}
