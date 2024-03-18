<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth\Mobile;

use App\Enum\UserRole;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class LogoutController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $this->deleteAccessToken($request->user());

        return response()->json(204);
    }

    private function deleteAccessToken(User $user): void
    {
        $user->logs()->create([
            'action' => 'User logged out successfully',
            'role' => UserRole::names()[$user->role],
            'full_name' => $user->full_name,
        ]);

        $user->currentAccessToken()->delete();
    }
}
