@extends('layouts.app')

@section('content')
    <div class="container-fluid py-5" style="background: #8395a7;width:100%; height:100vh;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Assignment For {{$course["title"]}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('editaddassignment')}}">
                            @csrf
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="" required autocomplete="title" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label  class="col-md-4 col-form-label text-md-end">{{ __('Assignment Description') }}</label>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" name="description" rows="3"></textarea>
                                      </div>
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
