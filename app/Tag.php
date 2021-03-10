<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    // Reverse Many To Many

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    // Reverse Many To Many

    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
