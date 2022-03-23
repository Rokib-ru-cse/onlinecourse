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
}
