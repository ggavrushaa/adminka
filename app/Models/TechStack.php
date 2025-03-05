<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechStack extends Model
{
    protected $table = 'tech_stacks';

    protected $fillable = [
        'name', 'category_id',
        'image', 'image_white',
        'show_on_site',
    ];

    public function category()
    {
        return $this->belongsTo(TechCategory::class);
    }
}
