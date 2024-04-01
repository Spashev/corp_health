<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enum\UserAccess;
use App\Enum\UserRole;
use App\Models\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            "first_name"=> "Administrator",
            "last_name"=> "Root",
            "middle_name"=> "test",
            "email"=> "admin@gmail.com",
            "phone"=> "77777777777",
            "role"=> UserRole::ADMINISTRATOR,
            "access"=> UserAccess::FULL,
            "password"=> Hash::make('root'),
            'remember_token' => Str::random(10),
        ]);
    }
}
