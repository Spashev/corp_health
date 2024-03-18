<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enum\UserAccess;
use App\Enum\UserRole;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $roles = UserRole::values();
        $roleKey = array_rand(UserRole::values());
        $access = UserAccess::values();
        $accessKey = array_rand($access);
        return [
            'email_verified_at' => now(),
            "first_name"=> fake()->firstName(),
            "last_name"=> fake()->lastName(),
            "middle_name"=> fake()->firstName(),
            "email"=> fake()->unique()->safeEmail(),
            "phone"=> "77777777777",
            "role"=> $roles[$roleKey],
            "access"=> $access[$accessKey],
            "password"=> static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
