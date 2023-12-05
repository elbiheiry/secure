<?php

namespace Modules\Blog\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    protected $fillable = [
        'id' , 'slug' ,'image'
    ];

    public $translatedAttributes = [
        'title' , 'description' , 'department'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_en'
            ],
        ];
    }

    public function getImagePathAttribute()
    {
        return $this->get_image($this->image , 'articles');
    }

    public function getRouteKeyName()
    {
        return 'slug';   
    }
    
    // protected static function newFactory()
    // {
    //     return \Modules\Blog\Database\factories\ArticleFactory::new();
    // }
}
