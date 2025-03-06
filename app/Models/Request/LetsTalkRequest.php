<?php

namespace App\Models\Request;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class LetsTalkRequest extends RequestBase
{

    protected $table = 'lets_talk_requests';
    public $timestamps = true;
    protected $fillable = [
        'name', 'email', 'position',
        'status', 'language',
        'company_name', 'project_name', 'phone', 'task',
        'budget', 'contact_in', 'direction', 'files',
        'created_at', 'updated_at',
    ];

    protected $casts = [
        'files' => 'array',
    ];

}
