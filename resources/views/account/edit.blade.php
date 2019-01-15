@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit account</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => 'update', 'files' => true]) !!}
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="logo" class="col-form-label">{{ __('Logo') }}</label>    
                                <input type="file" name="logo" id="logo" class="form-control"> 
                            </div>
                            {{-- <div class="col-md-8">
                                <label for="name" class="col-form-label">{{ __('Name') }}</label>    
                                <input type="text" name="name" id="name" class="form-control" value="{{Auth::user()->company->name}}" required autofocus> 
                            </div> --}}
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="employees" class="col-form-label">{{ __('Employees') }}</label>    
                                <input type="text" name="employees" id="employees" class="form-control" value="{{Auth::user()->company->employees}}" required autofocus> 
                            </div>
                            <div class="col-md-4">
                                <label for="location" class="col-form-label">{{ __('Office location') }}</label>    
                                <input type="text" name="location" id="location" class="form-control" value="{{Auth::user()->company->location}}" required autofocus> 
                            </div>
                            <div class="col-md-4">
                                <label for="url" class="col-form-label">{{ __('Website') }}</label>    
                                <input type="text" name="url" id="url" class="form-control" value="{{Auth::user()->company->url}}" required autofocus> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="description" class="col-form-label">{{ __('About company') }}</label>    
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" required autofocus>{{Auth::user()->company->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-warning btn-block" value="Update company information">
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
