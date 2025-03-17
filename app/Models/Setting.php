<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'key',
        'value',
    ];

    protected $casts = [
         'value' => 'array',
    ];

    public function setValueAttribute($value)
    {
        $this->attributes['value'] = json_encode($value ?? []);
    }

    public function getValueAttribute($value)
    {
        return json_decode($value, true);
    }



    public static function get($key, $default = null)
    {
        return self::where('key', $key)->value('value') ?? $default;
    }

    public static function set($key, $value)
    {
        return self::updateOrCreate(['key' => $key], ['value' => $value]);
    }
}
