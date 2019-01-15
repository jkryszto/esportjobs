@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Job offer</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                    {{$job}}

                    {!! Form::open(['route' => ['job.apply', $job], 'files' => true]) !!}
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <input type="name" name="name" id="name" placeholder="First and second name" class="form-control" required>
                            </div>
                            <div class="col-md-4 form-group">
                                <input type="email" name="email" id="email" placeholder="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <dt>Apply job</dt>
                                <input type="file" name="cv" id="cv" class="form-control" required>
                            </div>
                            <div class="col-md-8">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-md-4">
                                <input type="submit" value="Apply for this job" class="btn btn-primary btn-block">
                            </div>
                        </div> 
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
