<?php

declare(strict_types=1);

namespace App\Contracts\Users;

use App\Contracts\RepositoryInterface;

interface CoordinatorRepositoryInterface extends RepositoryInterface
{
    public function getCoordinators();
}