<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth\Admin;

use App\Enum\UserAccess;
use App\Enum\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Admin\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

final class LoginController extends Controller
{
    public function __invoke(LoginRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $user = User::where('email', $validatedData['email'])->first();

        if (!$user || !Hash::check($validatedData['password'], $user->password)) {
            return response()->json([
                'msg' => 'incorrect username or password'
            ], 401);
        }

        $token = $this->createToken($user, 'apiToken');

        $res = [
            'user' => $this->getUser($user),
            'token' => $token
        ];

        return response()->json($res, 201);
    }

    private function createToken(User $user, string $name = 'apiToken'): string
    {
        $token = $user->createToken($name)->plainTextToken;

        $user->logs()->create([
            'action' => 'User logged in successfully',
            'role' => UserRole::names()[$user->role],
            'full_name' => $user->full_name,
        ]);

        return $token;
    }
    
    public function getUser(User $user): array
    {
        $role = UserRole::names()[$user->role];
        $access = UserAccess::names()[$user->access];

        return [
            'id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'middle_name' => $user->middle_name,
            'email' => $user->email,
            'phone' => $user->phone,
            'role' => $role,
            'access' => $access,
        ];
    }
}
