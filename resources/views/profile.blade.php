@extends('layouts.app')
@section('content')
    <div style="background: rgb(207, 251, 255)" class="pt-5">
        <div class="container">
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
        <div class="container">
            <div class="w-50 mx-auto">
                <h1 class="my-5 text-center">Your Courses</h1>
                @foreach ($posts as $post)
                    <div class="card my-3">
                        <div class="card-header">
                            <h2>Title : {{ $post['title'] }}</h2>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"> <a class="btn btn-outline-primary" href="{{ route('coursedetail', $post['id']) }}">Course Details</a></h4>
                            <div class="d-flex justify-content-between">

                                <a class="btn btn-outline-success" href="{{ route('addlecture', $post['id']) }}">Add Lectures</a>
                                <a class="btn btn-outline-success" href="{{ route('addassignment', $post['id']) }}">Add Assignments</a>
                                
                            </div>
                            {{-- <div class="d-flex justify-content-between">

                                <a class="btn btn-success" href="{{ route('edit', $post['id']) }}">Edit</a>
                                <form method="post" action="{{ route('destroy', $post['id']) }}"
                                    onsubmit="return confirm('Sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Delete" class="btn btn-danger" />
                                </form>
                            </div> --}}

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
