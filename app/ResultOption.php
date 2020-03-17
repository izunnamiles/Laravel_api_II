<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultOption extends Model
{
    //
    protected $fillable= [
        'user_id','discussion_id','selected_option'
    ];

    public  function discussion(){
        return $this->belongsTo(Discussion::class);
    }

}

