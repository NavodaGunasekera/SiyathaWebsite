<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vedio;

class AddVedioController extends Controller
{
    //
    public function indexAddVedio($id){

        $vedios = Vedio::where('album_id',$id)->get();

        //return view('imageGallery')->with('images',$data);
        
        return view('vedioAdd', compact('id','vedios'));
    }

    public function VedioStore(Request $request){

        

            
        $filename=time().'.'. $request->file('file')->getClientOriginalExtension();
        request()->file->move(public_path('uploadVedio'), $filename);

        $vedio = new Vedio();
        $vedio->album_id = $request->album;
        $vedio->filename=$filename;
        $vedio->save();
        return back();

        
      
    }
}
