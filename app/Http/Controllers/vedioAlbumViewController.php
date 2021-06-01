<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Album;
use App\Models\VedioAlbum;
use App\Models\Vedio;

class vedioAlbumViewController extends Controller
{
    //
    public function index(){

        $albums = VedioAlbum::all();

        return view('vedioAlbumView', compact('albums'));
    }
    public function Vedioindex($id)
    {
        $vedios= Vedio::where('album_id',$id)->get();
        return view('vedioView',compact('vedios'));
    }

    public function back(){

        $albums = VedioAlbum::all();

        return view('vedioAlbumView', compact('albums'));
    }
}