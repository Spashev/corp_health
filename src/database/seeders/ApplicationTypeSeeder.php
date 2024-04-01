<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ApplicationType;
use Illuminate\Database\Seeder;

class ApplicationTypeSeeder extends Seeder
{
    public function run(): void
    {
        ApplicationType::create(['name' => 'Экстренное']);
        ApplicationType::create(['name' => 'Экстренное 1', 'parent_id' => 1]);
        ApplicationType::create(['name' => 'Экстренное 2', 'parent_id' => 1]);

        ApplicationType::create(['name' => 'Срочное']);
        ApplicationType::create(['name' => 'Обычное']);
    }
}
