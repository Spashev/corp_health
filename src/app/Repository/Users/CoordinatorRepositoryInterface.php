<?php

declare(strict_types=1);

namespace App\Repository\Users;

use App\Repository\RepositoryInterface;

interface CoordinatorRepositoryInterface extends RepositoryInterface
{
    public function getCoordinators();
}