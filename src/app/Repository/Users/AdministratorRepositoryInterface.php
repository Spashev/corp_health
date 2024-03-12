<?php

declare(strict_types=1);

namespace App\Repository\Users;

use App\Repository\RepositoryInterface;

interface AdministratorRepositoryInterface extends RepositoryInterface
{
    public function getAdministrators();
}