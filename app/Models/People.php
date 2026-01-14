<?php

namespace App\Models;

use App\Models\Scopes\PeopleScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

// global es tarha se bhi call kar sakty booted method k elawa.
// #[ScopedBy([PeopleScope::class])]
class People extends Model
{

    // ye already descuss ho chuka hai
    public function articles() {
        return $this->hasMany(Article::class);
    }

    // local scope for status column
    public function scopeActive($query){
        return $query->where('status', 1);
    }

    // local scope for city column
    public function scopeCity($query, $cityName='Mardan'){
        return $query->where('city', $cityName);
    }

    // local scope order by
    public function scopeSort($query){
        return $query->orderBy('name', 'asc');
    }


    protected static function booted(): void
    {
        // global scope 1 for status column
        static::addGlobalScope('peopledetail', function(Builder $builder){
            $builder->where('status', 1);
        });

        // alag global scope 2 file add/call kia hai. 
        static::addGlobalScope(new PeopleScope);
    }
}
