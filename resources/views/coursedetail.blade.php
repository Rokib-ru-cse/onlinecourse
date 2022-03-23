@extends('layouts.app')
@section('content')
    <div style="background: rgb(207, 251, 255); background-attachment: fixed;" class="py-5">
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
                            <p class="my-2">Lecture Link :{{ $lecture['lecturelink'] }}</p>
                        <p class="card-text">Posted : {{$lecture['created_at']->diffForHumans()}}</p>

                        </div>
                        <div class="d-flex justify-content-between mb-3 px-3">
                            <a class="btn btn-outline-success" href="{{ route('electure', $lecture['id']) }}">Edit</a>
                            <form method="post" action="{{ route('destroylecture', $lecture['id']) }}"
                                onsubmit="return confirm('Sure?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-outline-danger" />
                            </form>
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
                            <p class="mb-2">Assignment Description :{{ $assignmetn['description'] }}</p>
                            <p class="card-text">Posted : {{$assignmetn['created_at']->diffForHumans()}}</p>
                        </div>
                        <div class="d-flex justify-content-between mb-3 px-3">
                            <a class="btn btn-outline-success" href="{{ route('eassignment', $assignmetn['id']) }}">Edit</a>
                            <form method="post" action="{{ route('destroyassignment', $assignmetn['id']) }}"
                                onsubmit="return confirm('Sure?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-outline-danger" />
                            </form>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    @endsection
