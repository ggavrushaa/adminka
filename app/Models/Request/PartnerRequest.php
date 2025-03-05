<?php

namespace App\Models\Request;

use Illuminate\Database\Eloquent\Model;

class PartnerRequest extends RequestBase
{
    protected $table = 'partner_requests';

    protected $fillable = [
        'name', 'email', 'position', 'status', 'language',
        'message',
    ];
}
