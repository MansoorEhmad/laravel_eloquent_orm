<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // to save comments for videos
    public function store(){
        $video = Video::find(1);
        $video->comments()->create([
            'detail' => 'good video'
        ]);
    }
}
