@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5" style="background: #8395a7;background-attachment: fixed;height:100vh">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                      <form  method="POST" action="{{route('editlecture',$lecture['id'])}}">
                        @csrf
                        <div class="form-group">
                          <label >Lecture Title</label>
                          <input type="text" value="{{$lecture['title']}}" name="title" class="form-control my-3" placeholder="Enter Course Title">
                        </div>
                        <div class="form-group">
                          <label >Lecture Link</label>
                          <input type="text" value="{{$lecture['lecturelink']}}" name="lecturelink" class="form-control my-3" placeholder="Enter Course Link">
                        </div>
                        <input type="hidden" name="course_id" value="{{$course["id"]}}">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
