<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Course;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    //
    public function addassignment(Request $request, $id)
    {
        $course = Course::find($id);
        return view('addassignment',['course'=>$course]);
    }
    public function editaddassignment(Request $request){
        $newassignment = new Assignment;
        $newassignment->title = $request->title;
        $newassignment->description = $request->description;
        $newassignment->course_id = $request->course_id;
        $newassignment->save();
        return redirect('profile');
    }
}
