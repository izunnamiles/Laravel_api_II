<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $fillable=[
        'user_id','reference_code','issues','status','date_resolved'
    ];
}
