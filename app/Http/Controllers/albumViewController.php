<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Image;

class albumViewController extends Controller
{
    //
    public function index(){

        $albums = Album::all();

        return view('albumView', compact('albums'));
    }
    public function Imageindex($id)
    {
        $images= Image::where('album_id',$id)->get();
        return view('imageView',compact('images'));
    }

    public function back(){

        $albums = Album::all();

        return view('albumView', compact('albums'));
    }
}
