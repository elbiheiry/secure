<?php

namespace Modules\Subscribe\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'email'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Subscribe\Database\factories\SubscriberFactory::new();
    }
}
