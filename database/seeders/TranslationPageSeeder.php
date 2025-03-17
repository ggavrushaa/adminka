<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\TranslationPage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TranslationPageSeeder extends Seeder
{

    public function run(): void
    {
       $pages = [
        'Фіксована шапка',
        'Головна',
        'Tech stack',
        '404',
        'Категорії послуг',
        'Партнерам',
        'Блог',
        'Cases',
        'About',
        'Contacts',
        'Let’s talk',
        'Повторюючі блоки',
        'Текстові сторінки',
        'E-mail листи',
        'Підвал',
       ];

       foreach($pages as $page) {
            TranslationPage::updateOrCreate(
                ['name' => $page],
                ['slug' => Str::slug($page, '-')],
            );
       }

    }
}
