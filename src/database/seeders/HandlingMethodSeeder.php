<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\HandlingMethod;
use Illuminate\Database\Seeder;

class HandlingMethodSeeder extends Seeder
{
    public function run(): void
    {
        HandlingMethod::create(['name' => 'Заявку оставил член семьи']);
        HandlingMethod::create(['name' => 'Самостоятельно']);
        HandlingMethod::create(['name' => 'По рекомендации HR (формальное направление)']);
        HandlingMethod::create(['name' => 'По рекомендации руководителя (неформальное направление)']);
    }
}
