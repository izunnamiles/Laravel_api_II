<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Discussion_Group extends Model
{
    //
    protected $fillable=[
        'discussion_id','user_id','status','payment_status'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function discuss(){
        $this->belongsTo(Discussion::class);
    }
}

