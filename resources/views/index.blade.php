@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="text-center index-header">
                Find your dream job in esport indrustry
            </h1>

            <ul class="row index-categories-list mt-5">
                @foreach($categories as $c)
                    <li class="col-md text-center">
                        <button class="btn mb-1 btn-c btn-{{$c->alias}} btn-block">
                            {{$c->name}}
                        </button>
                    </li>
                @endforeach
            </ul>

            <!-- <div class="card">
                <div class="card-header">Index</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($jobs as $j)
                        <a href="{{route('job.show', $j)}}">{{$j->title}}</a>
                    @endforeach --}}
                </div>
            </div> -->
            <div class="row justify-content-center mt-5">
                @foreach ($jobs as $j)
                    <div class="col-md-8 job-list p-3 mb-4 b-{{$j->category->alias}}">
                        {{-- <a href="{{route('job.show', $j)}}"> --}}
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <span class="job-title col-md-12">
                                            <a href="{{route('job.show', $j)}}">
                                                {{$j->title}}
                                            </a>
                                        </span>
                                        <span class="job-company col-md-12">
                                            <a href="{{route('company.show', $j->user->company)}}">
                                                {{$j->user->company->name}}
                                            </a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4 text-right">
                                    <div class="job-pay">
                                        <span class="amount">
                                            {{$j->from}} 
                                            - 
                                            {{$j->to}}
                                        </span>
                                        <span class="currency">
                                            {{$j->currency}}
                                        </span>
                                    </div>
                                    <div class="job-location">
                                        @if ($j->location == 'remote')
                                            {{ucfirst($j->location)}}
                                        @else 
                                            {{$j->location}}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        {{-- </a> --}}
                    </div>
                @endforeach
                <div class="col-md-8 text-center l-m">
                    Load more offers
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
