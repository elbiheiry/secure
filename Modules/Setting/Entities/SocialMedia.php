<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "link",
        "icon"
    ];
    // protected static function newFactory()
    // {
    //     return \Modules\Settings\Database\factories\SocialMediaFactory::new ();
    // }
}