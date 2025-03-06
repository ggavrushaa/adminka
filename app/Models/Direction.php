<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $table = 'directions';

    protected $fillable = [
        'name_uk', 'name_en', 'name_ru', 
        'show_on_site', 'order_column',
    ];

}
