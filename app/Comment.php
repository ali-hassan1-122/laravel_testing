<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    // Reverse 

    public function commentable()
    {
        return $this->morphTo();
    }
}
