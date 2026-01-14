<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    public $timestamps = false;
    protected $guarded = [];



    // for one to one polymorphic
    // if u want to save/get data of subscribers with tables images then
    // subscribers -> images
    // images is second table which have photos of subscribers
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
