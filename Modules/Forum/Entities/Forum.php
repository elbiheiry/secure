<?php

namespace Modules\Forum\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Modules\Member\Entities\Member;

class Forum extends Model implements TranslatableContract
{
    use HasFactory , Translatable , Sluggable;

    protected $fillable = [
        'id' , 'slug' , 'member_id'
    ];

    public $translatedAttributes = [
        'title' , 'description' , 'category'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_en'
            ],
        ];
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function comments()
    {
        return $this->hasMany(ForumComment::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';   
    }
}
