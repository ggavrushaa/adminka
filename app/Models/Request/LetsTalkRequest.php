<?php

namespace App\Models\Request;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class LetsTalkRequest extends RequestBase
{
    protected $table = 'lets_talk_requests';
    protected $fillable = [
        'name', 'email', 'position', 'status', 'language',
        'company_name', 'project_name', 
        'phone', 'task', 'budget', 'contact_in',
        'direction', 'files',
    ];

    protected $casts = [
        'files' => 'array',
    ];
}
