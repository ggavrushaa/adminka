<?php

namespace App\Models;

use App\Enums\ServiceCategoryEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
       'name_ru', 'name_en', 'name_uk', 
       'category', 
       'faq_on_site', 'show_on_site',
        'seo_title_ru', 'seo_title_en', 'seo_title_uk',
        'seo_h1_ru', 'seo_h1_en', 'seo_h1_uk',
        'seo_desc_ru', 'seo_desc_en', 'seo_desc_uk',
        'seo_keywords_ru', 'seo_keywords_en', 'seo_keywords_uk',
        'seo_text_ru', 'seo_text_en', 'seo_text_uk',
        'seo_image',
    ];

    protected $casts = [
        'category' => 'array',
        'faq_on_site' => 'boolean',
        'show_on_site' => 'boolean',
    ];

    public function technologies()
    {
        return $this->belongsToMany(TechStack::class, 'service_technologies', 'service_id', 'tech_id');
    }

    public function cases()
    {
        return $this->belongsToMany(Work::class, 'service_cases', 'service_id', 'case_id');
    }

    public function articles()
    {
        return $this->belongsToMany(Article::class, 'service_articles', 'service_id', 'article_id');
    }

    public function getLocalizedNameAttribute()
    {
        return $this->{'name_' . app()->getLocale()};
    }

    public function getLocalizedSeoDescAttribute()
    {
        return $this->{'seo_desc_' . app()->getLocale()};
    }

   
}
