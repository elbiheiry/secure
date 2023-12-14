<?php

namespace Modules\Service\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    protected $fillable = [
        'id' , 'slug' ,'image' ,'outer_image' , 'icon' , 'parent_id'
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

    public function getOuterImagePathAttribute()
    {
        return $this->get_image($this->outer_image , 'services');
    }

    public function getRouteKeyName()
    {
        return 'slug';   
    }

    public function subs(): HasMany
    {
        return $this->hasMany(Service::class , 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Service::class , 'parent_id');
    }

    // protected static function newFactory()
    // {
    //     return \Modules\Service\Database\factories\ServiceFactory::new();
    // }
}
