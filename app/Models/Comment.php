<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
      public $timestamps = false;
    protected $guarded = [];


    // for one to many polymorphic & one of many polymorphic
    // parent table haveing comments of files & videos
    // files -> comments <- videos
    public function commentable(){
        return $this->morphTo();
    }
}
