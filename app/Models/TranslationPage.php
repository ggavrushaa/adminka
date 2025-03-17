<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TranslationPage extends Model
{
    protected $table = 'translations_pages';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }

}
