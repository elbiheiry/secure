<?php

namespace Modules\Forum\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ForumComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'email' , 'comment' , 'forum_id' , 'forum_comment_id'
    ];

    public function subComments()
    {
        return $this->hasMany(ForumComment::class);
    }
    
    // protected static function newFactory()
    // {
    //     return \Modules\Forum\Database\factories\ForumCommentFactory::new();
    // }
}
