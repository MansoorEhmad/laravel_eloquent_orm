<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // for one to one polymorphic
    // if u want to save/get data of paragraphs with tables images then
    // paragraphs -> images
    // images is second table which have photos of paragraphs
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
