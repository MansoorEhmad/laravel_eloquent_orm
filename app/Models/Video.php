<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // for one to many polymorphic
    // if u want to save/get data of videos with tables comments then
    // videos -> comments
    // comments is second table which have comments of videos
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }


    // get lattest comment for video
    public function lattestComment(){
        return $this->morphOne(Comment::class, 'commentable')->latestOfMany();
    }


    // get oldest comment for video
    public function oldestComment(){
        return $this->morphOne(Comment::class, 'commentable')->oldestOfMany();
    }



    //-------------
    // for many to many polymorphic (reverse)
    // if u want to save/get data of videos with tables tags,files and taggables then
    // videos -> tags -> files -> taggables
    // taggables is a table which have tags for videos
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
