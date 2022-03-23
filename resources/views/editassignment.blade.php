@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5" style="background: #8395a7;background-attachment: fixed;height:100vh">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('editassignment', $assignment['id']) }}">
                            @csrf
                            <div class="form-group">
                                <label>Assignment Title</label>
                                <input type="text" value="{{ $assignment['title'] }}" name="title" class="form-control my-3"
                                    placeholder="Enter Course Title">
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="description" rows="3">{{ $assignment['description'] }}</textarea>
                            </div>
                    
                    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
