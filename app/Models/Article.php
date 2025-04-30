<?php

namespace App\Models;

use App\Enums\ServiceCategoryEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 * @property int $id
 * @property string $name_ru
 * @property string $name_en
 * @property string $name_uk
 * @property string $text_ru
 * @property string $text_en    
 * @property string $text_uk
 * @property string $seo_title_ru
 * @property string $seo_title_en
 * @property string $seo_title_uk
 * @property string $seo_h1_ru
 * @property string $seo_h1_en
 * @property string $seo_h1_uk
 * @property string $seo_desc_ru
 * @property string $seo_desc_en
 * @property string $seo_desc_uk
 * @property string $seo_keywords_ru
 * @property string $seo_keywords_en
 * @property string $seo_keywords_uk
 * @property string $seo_text_ru
 * @property string $seo_text_en
 * @property string $seo_text_uk
 * @property string $image
 * @property string $seo_image
 * @property string $category
 * @property bool $show_on_site
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';

    protected $fillable = [
        'name_ru', 'name_en', 'name_uk',
        'text_ru', 'text_en', 'text_uk',
        'seo_title_ru', 'seo_title_en', 'seo_title_uk',
        'seo_h1_ru', 'seo_h1_en', 'seo_h1_uk',
        'seo_desc_ru', 'seo_desc_en', 'seo_desc_uk',
        'seo_keywords_ru', 'seo_keywords_en', 'seo_keywords_uk',
        'seo_text_ru', 'seo_text_en', 'seo_text_uk',
        'image', 'seo_image',
        'show_on_site',
    ];

    protected $casts = [
        'category' => ServiceCategoryEnum::class,
        'show_on_site' => 'boolean',
    ];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_articles', 'article_id', 'service_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'article_tags', 'article_id', 'tag_id', );
    }

    public function cases()
    {
        return $this->belongsToMany(Work::class, 'article_cases', 'article_id', 'case_id');
    }

    public function getLocalizedNameAttribute(): string
    {
        return $this->{"name_" . app()->getLocale()};
    }

    public function getLocalizedTextAttribute(): string
    {
        return $this->{"text_" . app()->getLocale()};
    }
}
