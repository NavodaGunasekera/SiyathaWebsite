<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;




class AddImageController extends Controller
{
    //
    
    public function indexAddImage($id){

        $images = Image::where('album_id',$id)->get();

        //return view('imageGallery')->with('images',$data);
        return view('imageGallery', compact('id','images'));
    }

    public function ImageStore(Request $request){

            
        $filename=time().'.'. $request->file('file')->getClientOriginalExtension();
        request()->file->move(public_path('uploads'), $filename);

        $image = new Image();
        $image->album_id = $request->album;
        $image->filename=$filename;
        $image->save();
        return back();

        
      
    }

    
    
}
