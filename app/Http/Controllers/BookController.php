<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Team;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        // get all
        // $books = Book::get();

        //$books = Book::with('team')->get();

        //echo $books[0]->team->team_name;

        // with search in book
        // $books = Book::with('team')->where('book_name', 'PHP')->get();

        // If u want to search in teams/parent table
        // $books = Book::withWhereHas('team', function($query){
        //     $query->where('team_name', 'Mansoor Khan');
        // })->get();


        // 1.[method] If u want to search in both tables
        // $books = Book::withWhereHas('team', function($query){
        //     $query->where('team_name', 'Mansoor Khan');
        // })->where('book_name', 'PHP')->get();

        // 2.[method]
        $teams = Team::where('team_name', 'Mansoor Khan')->get();
        $books = Book::whereBelongsTo($teams)->where('book_name', 'PHP')->get();

        return $books;
    }
}
