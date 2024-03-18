<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Users;

use App\Http\Controllers\Controller;
use App\Http\Resources\Users\UserLogResource;
use App\Services\UserLogsService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserLogController extends Controller
{
    public function index(Request $request, UserLogsService $service): AnonymousResourceCollection
    {
        $userLogs = $service->getUserLogs();
        
        return UserLogResource::collection($userLogs);
    }
}
