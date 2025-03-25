<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechCategory extends Model
{
    protected $table = 'tech_categories';

    protected $fillable = [
        'name',
    ];

    public function techStacks()
    {
        return $this->hasMany(TechStack::class, 'category_id');
    }
}
