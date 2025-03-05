<?php

namespace App\Models\Request;

use Illuminate\Database\Eloquent\Model;

class RequestBase extends Model
{
    protected $fillable = [
        'name', 'email', 'position', 'status', 'language',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function scopeActive($query) 
    {
        return $query->where('status', true);
    }
}
