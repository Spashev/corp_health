<?php

declare(strict_types=1);

namespace App\Repository\Users;

use App\Contracts\Users\UserLogsRepositoryInterface;
use App\Models\User\UserActionLog;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserLogsRepository implements UserLogsRepositoryInterface
{
    public function getUserLogs(): LengthAwarePaginator
    {
        return UserActionLog::query()->with('user')->paginate(10);
    }
}