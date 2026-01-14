<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    // to get files with comments
    public function index(){
        //$file = File::with('comments')->find(1);
        //return $file;

        // -------
        // for one of many polymorphic
        // $file = File::with('lattestComment')->find(1);
        // return $file;

        // $file = File::with('oldestComment')->find(1);
        // return $file;

        //---------
        // for many to many polymorphic, same u can do for videos and tags..
        $file = File::with('tags')->find(1);
        return $file;
    }


    // to save comments for files
    public function store(){
        // $file = File::find(1);
        // $file->comments()->create([
        //     'detail' => 'good file'
        // ]);


        //--------
        // for many to many polymorphic
        // if file and tag available then simple attach/add tag in taggables table
        // $file = File::find(1);
        // $file->tags()->attach(3);


        // for many to many polymorphic
        // if file and tag not available then
        // $file = File::create([
        //     'file' => 'file 3'
        // ]);
        // $file->tags()->create([
        //     'tag' => 'linkable'
        // ]);


        // for many to many polymorphic
        // if file and tag available then simple detach/remove tag in taggables table
        $file = File::find(1);
        $file->tags()->detach(1);
    }
}
