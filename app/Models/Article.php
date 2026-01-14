<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // ye already descuss ho chuka hai
    public function people() {
        return $this->belongsTo(People::class);
    }
}
