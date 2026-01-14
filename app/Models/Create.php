<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    // note i added both because i want to get from both posts and country.
    // 1: for one to many relationship
    // if u want to get data of creates with child table posts then
    // creates -> posts
    public function posts(){
        return $this->hasMany(Post::class);
    }

    // reverse relation
    // if u want to get data of creates with parent table countries then
    // creates [one to many] countries
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
