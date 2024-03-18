<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\Users\UserLogsRepositoryInterface;

class UserLogsService
{
    public function __construct(private readonly UserLogsRepositoryInterface $repository)
    {
    }
    
    public function getUserLogs()
    {
        return $this->repository->getUserLogs();
    }
}