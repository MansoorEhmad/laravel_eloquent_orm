<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    // to save images for subscribers
    public function store(){
        $user = Subscriber::find(1);
        $user->image()->create([
            'url' => 'image1.png'
        ]);
    }
}
