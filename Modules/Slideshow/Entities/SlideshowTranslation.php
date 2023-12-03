<?php

namespace Modules\Slideshow\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SlideshowTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' , 'subtitle' , 'locale' , 'slideshow_id'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Slideshow\Database\factories\SlideshowTranslationFactory::new();
    // }
}
