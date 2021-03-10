<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $guarded = [];

    // One To Many

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }


    // One To One

    public function comment()
    {
        return $this->morphOne(Comment::class, 'commentable');
    }

    // Many To Many

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
