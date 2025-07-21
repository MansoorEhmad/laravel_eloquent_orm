<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $guarded = [];


    // for one to many relationship
    // if u want to get data of roles with tables members & user_roles then
    // members <- user roles -> roles
    // user_roles is third table which have ids of members and roles
    public function members(){
        return $this->belongsToMany(Member::class, 'user_roles');
    }
}
