<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = [
        'quote_uk',
        'text_uk',
        'quote_en',
        'text_en',
        'quote_ru',
        'text_ru',
        'rating',
        'link',
        'author',
        'position',
        'project_name',
        'source_id',
        'show_on_site',
    ];

    public function source()
    {
        return $this->belongsTo(ReviewSource::class);
    }

    public function getLocalizedQuoteAttribute(): string
    {
        return $this->{"quote_" . app()->getLocale()};
    }

    public function getLocalizedTextAttribute(): string
    {
        return $this->{"text_" . app()->getLocale()};
    }

}
