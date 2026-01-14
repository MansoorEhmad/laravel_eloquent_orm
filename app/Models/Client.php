<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // ye ham discuss kar chuky already
    public function record(){
        return $this->hasMany(Record::class);
    }


    // ab chunke ye trigger method ha tu ye khud ba khud call honga,
    // aur esly ab client k delete k sath sath client ka,
    // records waha pe controller m delete karni ki,
    // zarorat ni ha, kunke k waha pe jab client delete hoga,
    // yaha pe triiger method m client ka records khud delete,
    // ho jayengy.
    protected static function booted(): void
    {
        // ye event ha jo apne app trigger hoga.
        static::deleted(function($client){
            // note yaha pe $client apne marzi se change karskte ho,
            // record() upar jo maine method banaya ha o ha.
            $client->record()->delete();
        });

        // aur b events ha jo ham use karskty ha...
    }
}
