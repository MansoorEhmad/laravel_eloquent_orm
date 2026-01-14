<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    // its important to tell that save and get as json
    protected $casts = [
        "meta_data" => 'json',
    ];
}
