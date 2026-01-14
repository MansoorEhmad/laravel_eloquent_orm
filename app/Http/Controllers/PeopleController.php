<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   // with local scope
        // $people = People::with('articles')->where('status',1)->get();

        // with local scope, cos local scope function(active) available in model
        //$people = People::with('articles')->active()->get();

        // with local scope, cos local scope function(city,active) available in model
        //$people = People::with('articles')->city('Malakand')->active()->get();

        // with local scope, cos local scope function(city,active and sort) available in model
        //$people = People::with('articles')->city('Malakand')->active()->sort()->get();

        // with golabl scope 1, we do not need to call active because of auto. 
        // $people = People::with('articles')->city('Malakand')->sort()->get();

        // with golabl scope 2, alag file from models/scopes/peoplescope
        $people = People::city('Malakand')->sort()->get();
        return $people;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
