<?php

namespace Modules\Client\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory , ImageTrait;

    protected $fillable = [
        'image' , 'link'
    ];

    public function getImagePathAttribute()
    {
        return $this->get_image($this->image , 'clients');
    }
    
    // protected static function newFactory()
    // {
    //     return \Modules\Client\Database\factories\ClientFactory::new();
    // }
}
