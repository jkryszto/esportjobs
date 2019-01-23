@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="offer-title">
                <h2>{{$job->title}}</h2>
                {{-- <span class="badge badge-primary btn-{{$job->category->alias}}">
                    {{$job->job_type->name}}
                </span> --}}<br>
                <a href="{{route('company.show', $job->user->company)}}">{{$job->user->company->name}}</a>
            </div>

            <div class="offer-info mt-4">
                <ul class="row list-unstyled text-center">
                    <li class="col-md-4">
                        <small>Salary</small> 
                        <span class="text-uppercase">
                            {{$job->from}} - {{$job->to}} {{$job->currency}}
                        </span>
                    </li>
                    <li class="col-md-4">
                        <small>Job type</small> 
                        {{$job->job_type->name}}
                    </li>
                    <li class="col-md-4">
                        <small>Location</small> 
                        {{ucfirst($job->location)}}
                    </li>
                </ul>
            </div>

            <div class="offer-description mt-4 mb-4">
                <p>
                    {{$job->description}}
                </p>
            </div>
            <hr>
            <div class="offer-apply mt-4">
                {!! Form::open(['route' => ['job.apply', $job], 'files' => true]) !!}
                    <div class="row">
                        <div class="col-md-7 form-group">
                            <input type="name" name="name" id="name" placeholder="Name" class="form-control" required>
                        </div>
                        <div class="col-md-5 form-group">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 form-group">
                            <textarea name="description" id="description" cols="30" rows="4" class="form-control" placeholder="Write some about yourself or put links for github, behance, etc."></textarea>
                        </div>
                        <div class="col-md-5 form-group d-flex flex-column justify-content-between">                       
                            <input type="file" name="cv" id="cv" class="form-file" placeholder="cv" required>
                            <input type="submit" value="Apply for this job" class="btn btn-warning btn-block">
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>

            <div class="more-offer"></div>

            {{-- <div class="card">
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
            </div> --}}
        </div>
    </div>
</div>
@endsection
