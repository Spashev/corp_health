<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User\CustomerCategory;
use Illuminate\Database\Seeder;

class CustomerCategorySeeder extends Seeder
{
    public function run(): void
    {
        CustomerCategory::create(['name' => 'Родственники']);
        CustomerCategory::create(['name' => 'Партнеры (супруги)', 'parent_id' => 1]);
        CustomerCategory::create(['name' => 'Дети до 23 лет', 'parent_id' => 1]);
        CustomerCategory::create(['name' => 'Родители', 'parent_id' => 1]);
        CustomerCategory::create(['name' => 'Сестры/ братья', 'parent_id' => 1]);
        CustomerCategory::create(['name' => 'Другое', 'parent_id' => 1]);

        CustomerCategory::create(['name' => 'Сотрудники']);
        CustomerCategory::create(['name' => 'Постоянные', 'parent_id' => 2]);
        CustomerCategory::create(['name' => 'Временные', 'parent_id' => 2]);
    }
}
