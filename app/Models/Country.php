<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // note i added both because i want to get from both creates and posts.
    // 1: for one to many relationship
    // if u want to get data of countries with child table creates then
    // countries -> creates
    public function creates(){
        return $this->hasMany(Create::class);
    }


    // 2: for has many through relationship
    // if u want to get data of countries with sub child [means posts table, our ye posts table countries k sat link ni ha direct, ye creates table k sat ha, our creates table countries k sat.] table posts then
    // countries -> creates -> posts
    public function posts(){
        return $this->hasManyThrough(Post::class, Create::class);
    }
}
