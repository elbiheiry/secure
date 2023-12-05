<?php

namespace Modules\Forum\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ForumTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' , 'description' , 'locale' , 'forum_id'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Forum\Database\factories\ForumTranslationFactory::new();
    // }
}
