@extends('layouts.app')

@section('content')
{{-- <form method="POST" action="{{ route('register') }}">
        @csrf --}}
        {!! Form::open(['route' => 'register']) !!}


<div class="container">
    <div class="row justify-content-center">  
        <div class="col-md-8 mb-4">
                
            <div class="card">
                <div class="card-header">{{ __('Company information') }}</div>
                <div class="card-body">       
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="logo" class="col-form-label">{{ __('Logo') }}</label>    
                            <input type="file" name="logo" id="logo" class="form-control" required autofocus> 
                        </div>
                        <div class="col-md-8">
                            <label for="name" class="col-form-label">{{ __('Name') }}</label>    
                            <input type="text" name="name" id="name" class="form-control" required autofocus> 
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="employees" class="col-form-label">{{ __('Employees') }}</label>    
                            <input type="text" name="employees" id="employees" class="form-control" required autofocus> 
                        </div>
                        <div class="col-md-4">
                            <label for="location" class="col-form-label">{{ __('Office location') }}</label>    
                            <input type="text" name="location" id="location" class="form-control" required autofocus> 
                        </div>
                        <div class="col-md-4">
                            <label for="url" class="col-form-label">{{ __('Website') }}</label>    
                            <input type="text" name="url" id="url" class="form-control" required autofocus> 
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <label for="description" class="col-form-label">{{ __('About company') }}</label>    
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" required autofocus></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
