<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewSource extends Model
{
    protected $table = 'review_sources';

    protected $fillable = [
        'name',
    ];
}
