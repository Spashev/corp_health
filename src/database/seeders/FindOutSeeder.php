<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FindOut;
use Illuminate\Database\Seeder;

class FindOutSeeder extends Seeder
{
    public function run(): void
    {
        FindOut::create(['name' => 'От руководителя']);
        FindOut::create(['name' => 'От сотрудника отдела HR/отдела по работе с персоналом']);
        FindOut::create(['name' => 'От коллег']);
        FindOut::create(['name' => 'Плакат, визитка, брошюра']);
        FindOut::create(['name' => 'Интранет']);
        FindOut::create(['name' => 'Электронная рассылка']);
        FindOut::create(['name' => 'Презентация, в том числе запись']);
        FindOut::create(['name' => 'Член Семьи']);
        FindOut::create(['name' => 'Другое']);
    }
}
