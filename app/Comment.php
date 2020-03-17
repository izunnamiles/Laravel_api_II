<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'user_id','discussion_id','comment'
    ];

    public function discussion(){
        return $this->BelongsTo(Discussion::Class);
    }
}
