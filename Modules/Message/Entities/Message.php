<?php

namespace Modules\Message\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    
    // protected static function newFactory()
    // {
    //     return \Modules\Message\Database\factories\MessageFactory::new();
    // }
}