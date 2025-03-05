<?php

namespace App\Models\Request;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends RequestBase
{
    protected $table = 'contact_requests';
    
    protected $fillable = [
        'name', 'email', 'position', 'status', 'language',
        'message', 
    ];

}
