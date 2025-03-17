<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = 'translations';

    protected $fillable = [
        'page_id',
        'field',
        'text_en', 'text_ru', 'text_uk',
    ];

    public function page()
    {
        return $this->belongsTo(TranslationPage::class, 'page_id');
    }


}
