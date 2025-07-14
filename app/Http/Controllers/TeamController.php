<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){
        //$teams = Team::all();

        // only some columns
        //$teams = Team::select('team_name')->get();

        //$teams = Team::with('book')->get();

        //$teams = Team::with('book')->find(1);

        // da ba mala teams table na aga data rakai che aga pa books table table ke na ve,
        // mtlb da aga data che id ye books table k na v.
        // $teams = Team::doesntHave('book')->get();

        // aga data teams table na che id ye books k v,
        //$teams = Team::has('book')->get();
        // aga data teams table na che id ye books k v, aw books table wala data hum.
        $teams = Team::has('book')->with('book')->get();

        return $teams;
    }


    public function store(){
        // if u want to add in both tables
        // $team = Team::create([
        //     'team_name' => 'Ayan Ahmad'
        // ]);

        // $team->book()->create([
        //     'book_name' => 'PHP'
        // ]);

        $team = Team::find(3);

        // if u want to add in child table and data already available in parent table.
        // book is method created in team model
        $team->book()->create([
            'book_name' => 'Python'
        ]);


        // if u want to add multiple then like,
        // use createMany([
        // [],
        // []
        // ]);
    }
}
