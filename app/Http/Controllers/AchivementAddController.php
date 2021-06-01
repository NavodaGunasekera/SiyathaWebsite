<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AchivementAdd;
use App\Models\AchivementAlbum;

class AchivementAddController extends Controller
{
    //
    public function indexachivementAdd($id){

        //$data = AchivementAdd::all();
        $students = AchivementAdd::where('album_id',$id)->get();
        //dd($data); 
        
        //return view('AchivementAdd')->with('students',$data);
        return view('AchivementAdd', compact('id','students'));

        //return view('albumCreate');
    }

    public function studentStore(Request $request){

        $filename=time().'.'. $request->student_image->getClientOriginalExtension();
        request()->student_image->move(public_path('student_image'), $filename);

        
        


        $student = new AchivementAdd();

        $this->validate($request,[
            'student_name'=>'required|max:100|min:2',
            'subject_stream'=>'required|max:100|min:2',
            'result'=>'required|max:100|min:3',
            'district'=>'required|max:100|min:2',
            'district_rank'=>'required|max:100|min:1',
            // 'island_rank'=>'max:100',
            // 'student_image'=>'required',
        ]);
        

        $student->album_id = $request->album;
        $student->student_name = $request->student_name;
        $student->subject_stream = $request->subject_stream;
        $student->result = $request->result;
        $student->district = $request->district;
        $student->district_rank = $request->district_rank;
        $student->island_rank = $request->island_rank;
        $student->student_image=$filename;
        $student->save();
        return back();
    }

    public function deletealbum($id){
        $student=AchivementAdd::find($id);
        $student->delete();
        return redirect()->back();
    }
}
