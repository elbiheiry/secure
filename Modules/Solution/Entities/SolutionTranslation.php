<?php

namespace Modules\Solution\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SolutionTranslation extends Model
{
    use HasFactory;

    public $fillable = [
        'name' , 'description' , 'service_id' , 'locale'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Service\Database\factories\ServiceTranslationFactory::new();
    // }
}
