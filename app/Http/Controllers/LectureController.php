<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    //
    
    public function addlecture(Request $request, $id)
    {
        $course = Course::find($id);
        return view('addlecture',['course'=>$course]);
    }
    public function editaddlecture(Request $request){
        $newlecture = new Lecture;
        $newlecture->title = $request->title;
        $newlecture->lecturelink = $request->lecturelink;
        $newlecture->course_id = $request->course_id;
        $newlecture->save();
        return redirect('profile');
    }
    public function destroylecture(Request $request, $id)
    {
        $lecture = Lecture::find($id);
        $lecture->delete();
        return redirect()->route('profile');
    }
    public function edit(Request $request, $id)
    {
        $lecture = Lecture::find($id);
        $course = Course::find($lecture['course_id']);
        return view('editlecture',['lecture'=>$lecture,'course'=>$course]);
    }
    
    public function editlecture(Request $request, $id)
    {

        $newlecture= Lecture::find($id);
        $newlecture->title = $request->title;
        $newlecture->lecturelink = $request->lecturelink;
        $newlecture->course_id = $request->course_id;
        $newlecture->save();
        return redirect('profile');
    }

}
