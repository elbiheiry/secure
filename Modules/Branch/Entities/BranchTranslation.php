<?php

namespace Modules\Branch\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BranchTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'address' , 'locale' , 'branch_id'
    ];
    
    // protected static function newFactory()
    // {
    //     return \Modules\Branch\Database\factories\BranchTranslationFactory::new();
    // }
}
