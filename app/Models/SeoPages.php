<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeoPages extends Model
{
    protected $table = 'seo_pages';

    protected $fillable = [
        'page_id', 
        'seo_title', 'seo_description', 'seo_keywords',
        'seo_h1', 'seo_text', 'seo_image',
    ];
}
