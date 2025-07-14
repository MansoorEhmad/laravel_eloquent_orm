<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    protected $guarded = [];



    // reverse relation
    // if u want to get data of books with parent table teams then
    // books [one to many] teams
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
