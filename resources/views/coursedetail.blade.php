@extends('layouts.app')
@section('content')
    <div style="background: rgb(207, 251, 255);width:100%;height:100vh" class="py-5">
        <div class="container">
            <div class="w-50 mx-auto">
                <h1 class="text-center">Course Name : {{$course->title}}</h1>
                <h3 class="text-center">Author Name : {{$author->name}}</h3>
                <hr>
                <h1 class="my-5 text-center">Lecture List</h1>
                <hr>
                @if(count($lectures) == 0)
                    <h4>No Lecture added for this course yet</h4>
                @else
                @foreach ($lectures as $lecture)
                    <div class="card my-3">
                        <div class="card-header">
                            <h2>Title : {{ $lecture['title'] }}</h2>
                        </div>
                        <div class="card-body">
                            <p>Lecture Link :{{ $lecture['lecturelink'] }}</p>
                        </div>
                    </div>
                @endforeach
                @endif
                <h1 class="my-5 text-center">Assignment List</h1>
                <hr>
                @if(count($assignmetns) == 0)
                    <h4>No Assignment added for this course yet</h4>
                @else
                @foreach ($assignmetns as $assignmetn)
                    <div class="card my-3">
                        <div class="card-header">
                            <h2>Title : {{ $assignmetn['title'] }}</h2>
                        </div>
                        <div class="card-body">
                            <p>Assignment Description :{{ $assignmetn['description'] }}</p>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    @endsection
