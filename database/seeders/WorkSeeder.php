<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WorkSeeder extends Seeder
{
    public function run(): void
    {
        Work::factory()->count(20)->create();
    }
}
