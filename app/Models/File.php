<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // for one to many polymorphic
    // if u want to save/get data of files with tables comments then
    // files -> comments
    // comments is second table which have comments of files
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }


    // get lattest comment for file
    public function lattestComment(){
        return $this->morphOne(Comment::class, 'commentable')->latestOfMany();
    }


    // get oldest comment for file
    public function oldestComment(){
        return $this->morphOne(Comment::class, 'commentable')->oldestOfMany();
    }


    //-------------
    // for many to many polymorphic (reverse)
    // if u want to save/get data of files with tables tags,videos and taggables then
    // files -> tags -> videos -> taggables
    // taggables is a table which have tags for files
    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
