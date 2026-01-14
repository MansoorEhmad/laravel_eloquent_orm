<?php

namespace App\Http\Controllers;

use App\Models\Create;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        // get all creates with countries & posts.
        $creates = Create::with('country')->with('posts')->get();
        return $creates;
    }
}
