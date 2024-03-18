<?php

declare(strict_types=1);

namespace App\Http\Resources\Users\Consultant;

use App\Enum\UserAccess;
use App\Enum\UserRole;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetConsultantResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        $role = UserRole::names()[$this->role];
        $access = UserAccess::names()[$this->access];

        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'role' => $role !== false ? $role : null,
            'access' => $access !== false ? $access : null,
            'is_active' => $this->is_active,
            'created_at' => $this->created_at,
            'country_id' => $this->country_id,
        ];
    }
}
