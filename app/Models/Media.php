<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $fillable = [
        'name', 'image', 'image_white', 
        'show_on_site',
    ];
}
