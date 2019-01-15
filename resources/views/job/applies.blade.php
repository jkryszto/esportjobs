@foreach ($applies as $a)
    {{$a->name}}
        <a href="{{url('storage/'.$a->cv)}}"><button>Show cv</button></a>
    <br>
@endforeach