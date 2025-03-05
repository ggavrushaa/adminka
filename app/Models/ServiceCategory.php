<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $table = 'service_categories';

    protected $fillable = [
        'name',
    ];

    public static function syncWithEnum()
    {
        $categories = \App\Enums\ServiceCategoryEnum::values();

        foreach ($categories as $category) {
            ServiceCategory::updateOrCreate(['name' => $category]);
        }
    }
}
