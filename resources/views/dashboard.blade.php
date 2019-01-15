@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('edit')}}">
                <button class="btn btn-dark">Edit account</button>
            </a>

            <div class="card mt-4">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($jobs as $j)
                        <a href="{{route('job.show', $j)}}"><strong>{{$j->title}}</strong></a>
                        @if ($j->verify == 0)
                            <span class="badge badge-info">Verifing</span>
                        @endif
                        <br>
                        applies: {{count($j->applies)}}
                        <br>
                        date end: {{$j->time_to_end}}
                        <br>
                            <a href="{{route('job.up', $j)}}"><button>Up job</button></a>
                            <a href="{{route('job.disable', $j)}}"><button>Disable job</button></a>
                            <a href="{{route('job.applies', $j)}}"><button>Applies</button></a>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
