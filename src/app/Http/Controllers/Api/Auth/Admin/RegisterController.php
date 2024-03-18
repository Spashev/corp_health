<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth\Admin;

use App\Enum\UserAccess;
use App\Enum\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Admin\RegisterRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

final class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request): JsonResponse
    {
        $validatedData = $request->validated();
        $role = $validatedData['role'] ? UserRole::values()[$validatedData['role']] : UserRole::CLIENT;
        $access = $validatedData['access'] ? UserAccess::values()[$validatedData['access']] : UserAccess::MOBILE;
        
        $user = User::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'middle_name' => $validatedData['middle_name'] ?? '',
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'] ?? '',
            'role' => $role,
            'access' => $access,
            'country_id' => $request->get('country_id'),
            'password' => bcrypt($validatedData['password'])
        ]);

        $token = $user->createToken('apiToken')->plainTextToken;

        $res = [
            'user' => $this->getUser($user),
            'token' => $token
        ];

        return response()->json($res, 201);
    }

    private function getUser(User $user): array
    {
        return [
            'id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'middle_name' => $user->middle_name,
            'email' => $user->email,
            'phone' => $user->phone,
            'role' => $user->role->name,
            'access' => $user->access->name,
        ];
    }
}
