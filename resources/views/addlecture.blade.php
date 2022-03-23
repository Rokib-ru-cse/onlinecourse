@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5" style="background: #8395a7;background-attachment: fixed;height:100vh">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Lecture For {{$course["title"]}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('editaddlecture')}}">
                            @csrf
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="" required autocomplete="title" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Lecture Link') }}</label>
                                <div class="col-md-6">
                                    <input  type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="lecturelink" value="" required autofocus placeholder="Add Lecture Link">
                                </div>
                            </div>
                            <input type="hidden" name="course_id" value="{{$course["id"]}}">
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
