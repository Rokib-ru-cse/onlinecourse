@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{route('addcourse')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label >Course Title</label>
                  <input type="text" name="title" class="form-control" placeholder="Enter Course Title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
