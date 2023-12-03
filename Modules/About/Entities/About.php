<?php

namespace Modules\About\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class About extends Model implements TranslatableContract
{
    use HasFactory , Translatable, ImageTrait;

    protected $fillable = [
        'id' , 'image' , 'icon'
    ];

    public function getImagePathAttribute()
    {
        return $this->get_image($this->image , 'about');
    }

    public $translatedAttributes = [
        'title' , 'description'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\About\Database\factories\AboutFactory::new();
    // }
}
