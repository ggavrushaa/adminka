<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'works';

    protected $fillable = [
        'title_uk', 'description_uk',
        'title_en', 'description_en',
        'title_ru', 'description_ru',
        'image', 'video', 'link', 
        'project_type', 'show_on_site', 
        'no_work_page', 'show_in_work_block', 
        'show_in_footer',
    ];

    public function getLocalizedTitleAttribute(): string
    {
        return $this->{"title_" . app()->getLocale()};
    }
}
