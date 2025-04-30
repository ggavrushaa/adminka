<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(WorkSeeder::class);

        $this->call(ArticleSeeder::class);

        $this->call(TranslationPageSeeder::class);

        \App\Models\ServiceCategory::syncWithEnum();
    }
}
