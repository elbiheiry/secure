<?php

namespace Modules\Service\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;

class Service extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    protected $fillable = [
        'id' , 'slug' ,'image'
    ];

    public $translatedAttributes = [
        'name' , 'description'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_en'
            ],
        ];
    }

    public function getImagePathAttribute()
    {
        return $this->get_image($this->image , 'services');
    }

    public function getRouteKeyName()
    {
        return 'slug';   
    }
    // protected static function newFactory()
    // {
    //     return \Modules\Service\Database\factories\ServiceFactory::new();
    // }
}
