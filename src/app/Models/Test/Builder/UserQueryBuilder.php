<?php

declare(strict_types=1);

namespace App\Models\Test\Builder;

use App\Enum\UserRole;
use Illuminate\Database\Eloquent\Builder;

class UserQueryBuilder extends Builder
{
    public function whereCoordinator(): self
    {
        return $this->where('role', UserRole::COORDINATOR);
    }
    public function whereAdministrator(): self
    {
        return $this->where('role', UserRole::ADMINISTRATOR);
    }
    public function whereClient(): self
    {
        return $this->where('role', UserRole::CLIENT);
    }
    public function whereConsultant(): self
    {
        return $this->where('role', UserRole::CONSULTANT);
    }
}