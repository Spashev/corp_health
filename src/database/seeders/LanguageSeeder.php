<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Location\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    public function run(): void
    {
        Language::create(['name' => 'Русский язык', 'code' => 'ru', 'country_code' => 'RU']);
        Language::create(['name' => 'Казахский язык', 'code' => 'kz', 'country_code' => 'KZ']);
        Language::create(['name' => 'Английский язык', 'code' => 'en', 'country_code' => 'GB']);
        Language::create(['name' => 'Грузинский язык', 'code' => 'ka', 'country_code' => 'GE']);
        Language::create(['name' => 'Армянский язык', 'code' => 'hy', 'country_code' => 'AM']);
        Language::create(['name' => 'Киргизский язык', 'code' => 'ky', 'country_code' => 'KG']);
        Language::create(['name' => 'Узбекский язык', 'code' => 'uz', 'country_code' => 'UZ']);
    }
}
