@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post a job offer</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['route' => 'job.store']) !!}
                        <div class="row form-group">
                            <div class="col-md-8">
                                <label for="title" class="col-form-label">{{ __('Job title') }}</label>    
                                <input type="text" name="title" id="title" class="form-control" required autofocus> 
                            </div>
                            <div class="col-md-4">
                                <label for="job_type_id" class="col-form-label">{{ __('Job type') }}</label>    
                                <select name="job_type_id" id="job_type_id" class="form-control" required autofocus>
                                    <option value="" selected disable hidden>Select job type</option>
                                    @foreach ($job_types as $jt)
                                        <option value="{{$jt->id}}" >{{$jt->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label for="from" class="col-form-label">{{ __('From') }}</label>    
                                <input type="number" min="0" name="from" id="from" class="form-control" required autofocus>
                            </div>
                            <div class="col-md-4">
                                <label for="to" class="col-form-label">{{ __('To') }}</label>    
                                <input type="number" min="0" name="to" id="to" class="form-control" required autofocus>
                            </div>
                            <div class="col-md-4">
                                <label for="currency" class="col-form-label">{{ __('Currency') }}</label>    
                                <select name="currency" id="currency" class="form-control" required autofocus>
                                    <option value="" selected disable hidden>Select currency</option>
                                    <option value="eur">EUR</option>
                                    <option value="usd">USD</option>
                                    <option value="gbp">GBP</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label for="location" class="col-form-label">{{ __('Location') }}</label>    
                                <input type="text" name="location" id="location" class="form-control" required autofocus>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <label for="remote" class="col-form-label">
                                    <input type="checkbox" name="remote" id="remote">
                                    {{ __('Remote') }}
                                </label>       
                            </div>
                            <div class="col-md-4">
                                <label for="category_id" class="col-form-label">{{ __('Category') }}</label>    
                                <select name="category_id" id="category_id" class="form-control" required autofocus>
                                    <option value="" selected disable hidden>Select category</option>
                                    @foreach ($categories as $c)
                                        <option value="{{$c->id}}" >{{$c->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="description" class="col-form-label">{{ __('Description') }}</label>    
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" required autofocus></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-warning" value="Post a job offer">
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
