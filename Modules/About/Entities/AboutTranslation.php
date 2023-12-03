<?php

namespace Modules\About\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' , 'description' , 'locale' , 'about_id'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\About\Database\factories\AboutTranslationFactory::new();
    // }
}
