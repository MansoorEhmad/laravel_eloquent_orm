<?php

namespace App\Http\Controllers;

use App\Models\Paragraph;
use Illuminate\Http\Request;

class ParagraphController extends Controller
{
    // to get paragraphs with images
    public function index(){
        $post = Paragraph::with('image')->find(1);
        return $post;
    }


    // to save images for paragraphs
    public function store(){
        $para = Paragraph::find(1);
        $para->image()->create([
            'url' => 'image2.png'
        ]);
    }
}
