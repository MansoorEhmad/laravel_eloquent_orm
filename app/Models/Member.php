<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    // for one to many relationship
    // if u want to get data of members with tables roles & user_roles then
    // members <- user roles -> roles
    // user_roles is third table which have ids of members and roles
    public function roles(){
        return $this->belongsToMany(Role::class, 'user_roles');
    }
}
