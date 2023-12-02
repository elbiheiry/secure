<?php

namespace Modules\Career\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CareerTranslation extends Model
{
    use HasFactory;

    public $fillable = [
        'title' , 'description' , 'location' , 'locale' , 'career_id'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Career\Database\factories\CareerTranslationFactory::new();
    // }
}
