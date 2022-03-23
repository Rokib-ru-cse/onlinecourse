@extends('layouts.app')
@section('content')
    <div style="background: rgb(207, 251, 255)" class="pt-5">
        <div class="container">
            <div class="w-50 mx-auto">
                {{-- <h1 class="my-5 text-center">Course Name : {{ $post['title'] }}</h1> --}}
                <hr>
                <h1 class="my-5 text-center">Lecture List</h1>
                <hr>
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
                <h1 class="my-5 text-center">Assignment List</h1>
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
            </div>
        </div>
    @endsection
