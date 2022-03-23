@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5" style="background: #8395a7;background-attachment: fixed;height:100vh">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                      <form action="{{route('editcourse',$course['id'])}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label >Course Title</label>
                          <input type="text" value="{{$course['title']}}" name="title" class="form-control my-3" placeholder="Enter Course Title">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
