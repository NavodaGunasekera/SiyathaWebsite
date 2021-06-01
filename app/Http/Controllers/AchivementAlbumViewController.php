<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AchivementAlbum;
use App\Models\AchivementAdd;


class AchivementAlbumViewController extends Controller
{
    //
    public function index(){

        $albums = AchivementAlbum::all();

        return view('AchivementAlbumView', compact('albums'));
    }
    public function Imageindex($id)
    {
        $students= AchivementAdd::where('album_id',$id)->get();
        
        return view('AchivementImageView',compact('students'));
    }

    public function back(){

        $albums = AchivementAlbum::all();

        return view('AchivementAlbumView', compact('albums'));
    }
}
