<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AchivementAlbum;

class AchivementAlbumCreateController extends Controller
{
    //
    public function indexalbumCreate(){

        $data = AchivementAlbum::all();
        //dd($data); 

        
        return view('AchivementAlbumCreate')->with('albums',$data);
        // dd($data); 
        //return view('albumCreate');
    }

    public function albumStore(Request $request){

        $filename=time().'.'. $request->cover_image->getClientOriginalExtension();
        request()->cover_image->move(public_path('cover_image'), $filename);


        $album = new AchivementAlbum();

        $this->validate($request,[
            'album_name'=>'required|max:72|min:2',
            

        ]);

        $album->album_name = $request->album_name;

        
        $album->cover_image=$filename;
        $album->save();
        return back();
    }

    public function deletealbum($id){
        $album=AchivementAlbum::find($id);
        $album->delete();
        return redirect()->back();
    }
}
