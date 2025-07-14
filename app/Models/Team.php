<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // for one to many relationship
    // if u want to get data of teams with child table books then
    // teams [one to many] books
    public function book(){
        return $this->hasMany(Book::class);
    }
}
