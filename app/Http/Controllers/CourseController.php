<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use App\Models\Lecture;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    //
    public function addcourse(Request $request){
        $newcourse = new Course;
        $newcourse->title = $request->title;
        $newcourse->user_id =Auth::user()->id;
        $newcourse->save();
        return redirect('home');
    }
    public function profile_show(Request $request)
    {  
           $id =Auth::user()->id;
           $allpost = Course::where("user_id",'=',$id)->orderBy('id','DESC')->get();
           return view('profile',['posts'=>$allpost]);
    }
    
    public function coursedetail(Request $request,$id){
        $alllectures = Lecture::where("course_id",'=',$id)->orderBy('id','DESC')->get();
        $allassignmetns = Assignment::where("course_id",'=',$id)->orderBy('id','DESC')->get();
        $course = Course::find($id);
        $author = User::find($course['user_id']);
        return view('coursedetail',['lectures'=>$alllectures,'assignmetns'=>$allassignmetns,'course'=>$course,'author'=>$author]);
    }

    public function destroycourse(Request $request, $id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->route('profile');
    }
    public function edit(Request $request, $id)
    {
        $course = Course::find($id);
        return view('editcourse',['course'=>$course]);
    }
    
    public function editcourse(Request $request, $id)
    {

        $data= Course::find($id);
        $data['title'] = $request->title;
        $data->save();
        return redirect()->route('profile');
    }


}
