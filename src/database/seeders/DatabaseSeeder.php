<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enum\UserAccess;
use App\Enum\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(CountryCitySeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(LanguageSeeder::class);
        $this->call(CustomerCategorySeeder::class);
        $this->call(ApplicationTypeSeeder::class);
        $this->call(HandlingMethodSeeder::class);
        $this->call(TreatmentCategorySeeder::class);
        $this->call(FindOutSeeder::class);
        $this->call(ConsultationFormatSeeder::class);
    }
}
