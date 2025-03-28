<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPages extends Model
{
    protected $table = 'seo_pages';

    protected $fillable = [
        'page_id', 
        'seo_title_ru', 'seo_description_ru', 'seo_keywords_ru', 'seo_h1_ru', 'seo_text_ru',
        'seo_title_uk', 'seo_description_uk', 'seo_keywords_uk', 'seo_h1_uk', 'seo_text_uk',
        'seo_title_en', 'seo_description_en', 'seo_keywords_en', 'seo_h1_en', 'seo_text_en',
        'seo_image',
    ];

    public function page()
    {
        return $this->belongsTo(TranslationPage::class, 'page_id');
    }
}
