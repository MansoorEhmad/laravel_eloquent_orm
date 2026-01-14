<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // for one to one polymorphic
    // parent table haveing images of paragraphs & subscribers
    // paragraphs -> images <- subscribers
    public function imageable(){
        return $this->morphTo();
    }
}
