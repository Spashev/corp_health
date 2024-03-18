<?php

declare(strict_types=1);

namespace App\Contracts\Users;

interface UserLogsRepositoryInterface
{
    public function getUserLogs();
}