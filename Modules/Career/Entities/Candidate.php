<?php

namespace Modules\Career\Entities;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidate extends Model
{
    use HasFactory , ImageTrait;

    protected $fillable = [
        'career_id' , 'name' , 'phone' , 'email' , 'title' , 'cv'
    ];

    public function getResumePathAttribute()
    {
        return $this->get_image($this->cv , 'careers');
    }
    
    // protected static function newFactory()
    // {
    //     return \Modules\Career\Database\factories\CandidateFactory::new();
    // }
}
