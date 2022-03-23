<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
}
