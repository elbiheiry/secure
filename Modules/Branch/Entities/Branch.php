<?php

namespace Modules\Branch\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Branch extends Model implements TranslatableContract
{
    use HasFactory , Translatable , ImageTrait;


    protected $fillable = [
        'id' , 'image'
    ];

    public $translatedAttributes = [
        'address'
    ];

    public function getImagePathAttribute()
    {
        return $this->get_image($this->image , 'branches');
    }
    
    // protected static function newFactory()
    // {
    //     return \Modules\Branch\Database\factories\BranchFactory::new();
    // }
}
