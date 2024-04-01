<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ConsultationFormat;
use Illuminate\Database\Seeder;

class ConsultationFormatSeeder extends Seeder
{
    public function run(): void
    {
        ConsultationFormat::create(['name' => 'Очно']);
        ConsultationFormat::create(['name' => 'Удаленно']);
        ConsultationFormat::create(['name' => 'По переписке']);
    }
}
