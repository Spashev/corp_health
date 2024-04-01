<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\TreatmentCategory;
use Illuminate\Database\Seeder;

class TreatmentCategorySeeder extends Seeder
{
    public function run(): void
    {
        TreatmentCategory::create(['name' => 'Психологические']);
        TreatmentCategory::create(['name' => 'Юридические']);
        TreatmentCategory::create(['name' => 'Финансовые']);
        TreatmentCategory::create(['name' => 'Коучинг']);
        TreatmentCategory::create(['name' => 'Зож-консультирование']);
        TreatmentCategory::create(['name' => 'Консьерж-сервис']);
    }
}
