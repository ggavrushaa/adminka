<?php

namespace App\Models\Request;

use App\Models\Setting;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class RequestBase extends Model
{
    protected $fillable = [
        'name', 'email', 'position', 'status', 'language',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($request) {
            $email = Setting::get('email_notification', 'foo@bar.com');

            $subject = "Новая заявка: ". class_basename($request);
            $messageBody = "Имя: {$request->name}\nEmail: {$request->email}\nДолжность: {$request->position}\n\n";

            if($request instanceof ContactRequest) {
                $messageBody .= "Сообщение: {$request->message}";
            } elseif($request instanceof PartnerRequest) {
                $messageBody .= "Сообщение: {$request->message}";
            } elseif($request instanceof LetsTalkRequest) {
                $messageBody .= "Компания: {$request->company_name}\nПроект: {$request->project_name}\nТелефон: {$request->phone}\nБюджет: {$request->budget}\n";
            }

            Mail::raw($messageBody, function ($message) use ($email, $subject) {
                $message->to($email)->subject($subject);
            });
        });

    }

    public function scopeActive($query) 
    {
        return $query->where('status', true);
    }
}
