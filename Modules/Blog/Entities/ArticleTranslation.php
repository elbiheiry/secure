<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title' , 'description' , 'department' , 'locale' , 'article_id'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Blog\Database\factories\ArticleTranslationFactory::new();
    // }
}
