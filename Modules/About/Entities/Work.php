<?php

namespace Modules\About\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Work extends Model implements TranslatableContract
{
    use HasFactory , Translatable, ImageTrait;


    protected $fillable = [];

    public $translatedAttributes = [
        'description1' , 'description2'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\About\Database\factories\WorkFactory::new();
    // }
}
