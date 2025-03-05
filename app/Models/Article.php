<?php

namespace App\Models;

use App\ServiceCategoryEnum;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'name_ru', 'name_en', 'name_uk',
        'text_ru', 'text_en', 'text_uk',
        'image', 'category',
        'seo_title_ru', 'seo_title_en', 'seo_title_uk',
        'seo_h1_ru', 'seo_h1_en', 'seo_h1_uk',
        'seo_desc_ru', 'seo_desc_en', 'seo_desc_uk',
        'seo_keywords_ru', 'seo_keywords_en', 'seo_keywords_uk',
        'seo_text_ru', 'seo_text_en', 'seo_text_uk',
        'seo_image',
        'show_on_site',
    ];

    protected $casts = [
        'category' => ServiceCategoryEnum::class,
        'show_on_site' => 'boolean',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'article_services');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags');
    }

    public function cases()
    {
        return $this->belongsToMany(Work::class, 'article_cases');
    }
}
