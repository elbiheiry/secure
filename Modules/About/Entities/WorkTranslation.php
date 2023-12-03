<?php

namespace Modules\About\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WorkTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'description1' , 'description2' , 'locale' , 'work_id'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\About\Database\factories\WorkTranslationFactory::new();
    // }
}
