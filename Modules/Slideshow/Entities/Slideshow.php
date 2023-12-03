<?php

namespace Modules\Slideshow\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Slideshow extends Model implements TranslatableContract
{
    use HasFactory , Translatable, ImageTrait;

    protected $fillable = [
        'image'
    ];

    public $translatedAttributes = [
        'title' , 'subtitle'
    ];

    public function getImagePathAttribute()
    {
        return $this->get_image($this->image , 'slideshow');
    }
    
    // protected static function newFactory()
    // {
    //     return \Modules\Slideshow\Database\factories\SlideshowFactory::new();
    // }
}
