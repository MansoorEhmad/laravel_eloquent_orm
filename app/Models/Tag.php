<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // for many to many polymorphic
    // if u want to save/get data of files with tables tags,videos and taggables then
    // files -> tags -> videos -> taggables
    // taggables is a table which have tags for files
    public function files(){
        return $this->morphedByMany(File::class, 'taggable');
    }

    // for many to many polymorphic
    // if u want to save/get data of videos with tables tags,files and taggables then
    // videos -> tags -> files -> taggables
    // taggables is a table which have tags for videos
    public function videos(){
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
