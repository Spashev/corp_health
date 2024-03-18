<?php

declare(strict_types=1);

namespace App\Contracts\Users;

use App\Contracts\RepositoryInterface;

interface AdministratorRepositoryInterface extends RepositoryInterface
{
    public function getAdministrators();
}