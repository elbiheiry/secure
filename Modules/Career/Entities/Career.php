<?php

namespace Modules\Career\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Career extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable , ImageTrait;

    protected $fillable = [
        'id' , 'slug' ,'image','type','vacation'
    ];

    public $translatedAttributes = [
        'title' , 'description' , 'location'
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
        return $this->get_image($this->image , 'careers');
    }

    public function getRouteKeyName()
    {
        return 'slug';   
    }

    /**
     * return candidates
     *
     * @return HasMany
     */
    public function candidates(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }

    public function getWorkTypeAttribute()
    {
        if ($this->type == 'fulltime') {
            return locale() == 'en' ? 'Full time' : 'دوام كامل';
        }else{
            return locale() == 'en' ? 'Part time' : 'دوام جزئي';
        }
    }

    // protected static function newFactory()
    // {
    //     return \Modules\Career\Database\factories\CareerFactory::new();
    // }
}
