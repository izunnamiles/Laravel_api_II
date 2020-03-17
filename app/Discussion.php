<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed comment
 */
class Discussion extends Model
{
    //
    protected $fillable=[
        'user_id','topic','details','option_a','option_b','option_c','option_d','status','winner_id','amount','referee'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function discussion_group(){
        return $this->hasMany(Discussion_Group::class);
    }
}
