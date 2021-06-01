<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VedioAlbum;

class vedioAlbumCreateController extends Controller
{
    //
    public function indexalbumCreate(){

        $data = VedioAlbum::all();
        //dd($data); 
        
        return view('vedioAlbumCreate')->with('albums',$data);

        //return view('albumCreate');
    }

    public function albumStore(Request $request){

        $filename=time().'.'. $request->cover_image->getClientOriginalExtension();
        request()->cover_image->move(public_path('cover_image'), $filename);


        $album = new VedioAlbum();

        $this->validate($request,[
            'album_name'=>'required|max:100|min:2',
        ]);

        $album->album_name = $request->album_name;

        
        $album->cover_image=$filename;
        $album->save();
        return back();
    }

    public function deletealbum($id){
        $album=VedioAlbum::find($id);
        $album->delete();
        return redirect()->back();
    }
}
