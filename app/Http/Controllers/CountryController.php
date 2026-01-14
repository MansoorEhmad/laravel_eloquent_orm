<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        // get countires with posts.
        //$countries = Country::with('posts')->find(5);

        // get all countires with posts.
        //$countries = Country::with('posts')->get();

        // get all countires with creates & posts.
        $countries = Country::with('creates')->with('posts')->get();
        return $countries;
    }
}
