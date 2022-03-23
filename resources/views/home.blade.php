@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5" style="background: rgb(185, 229, 250);width:100%;height:100vh">
        <div class="w-50 mx-auto">
            <h1 class="text-center">All Courses</h1>
            @foreach ($courses as $course)
                <div class="card my-3">
                    <div class="card-header">
                        <h2>Course Name : {{ $course['title'] }}</h2>
                    </div>
                    <div class="card-body">
                        @inject('user', 'App\Models\User')
                        <h4>Author : {{App\Models\User::find($course['user_id'])->name}}</h4>
                        <a class="btn btn-outline-primary"
                                href="{{ route('coursedetail', $course['id']) }}">Course Details</a>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
@endsection
