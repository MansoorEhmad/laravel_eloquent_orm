<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    // if u dont want to save a column values then add,
    // in guarded array.
    // protected $guarded = [];

    // if u want to save column values then add in fillable,
    // array

    // note both are working same,
    // u need to use one,
    // in guarded u need to add columns if u dont want to save, u can leave empty if u want to save all.
    // in fillable u need to add columns if u want to save. if u want to save all then add all otherwise u can add some columns.
    protected $fillable = [
        'name',
        'email'
    ];
}
