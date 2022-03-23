@extends('layouts.app')
@section('content')
    <div class="container-fluid py-5" style="background: rgb(207, 251, 255); background-attachment: fixed;">
        <div class="w-50 mx-auto">
            <h1 class="text-center mb-3">Your Profile</h1>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row">Your Name : </th>
                        <td>{{ Auth::User()->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Your Email : </th>
                        <td>{{ Auth::User()->email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="w-50 mx-auto">
            <h1 class="my-5 text-center">Your Courses</h1>
            @foreach ($posts as $post)
                <div class="card my-3">
                    <div class="card-header">
                        <h2>Title : {{ $post['title'] }}</h2>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"> <a class="btn btn-outline-primary"
                                href="{{ route('coursedetail', $post['id']) }}">Course Details</a></h4>
                        <div class="d-flex justify-content-between my-2">

                            <a class="btn btn-outline-success" href="{{ route('addlecture', $post['id']) }}">Add
                                Lectures</a>
                            <a class="btn btn-outline-success" href="{{ route('addassignment', $post['id']) }}">Add
                                Assignments</a>

                        </div>
                        <div class="d-flex justify-content-between mb-3">

                            <a class="btn btn-outline-success" href="{{ route('ecourse', $post['id']) }}">Edit Course</a>
                            <form method="post" action="{{ route('destroycourse', $post['id']) }}"
                                onsubmit="return confirm('Sure?')">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete Course" class="btn btn-outline-danger" />
                            </form>
                        </div>
                        <p class="card-text">Posted : {{$post['created_at']->diffForHumans()}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
