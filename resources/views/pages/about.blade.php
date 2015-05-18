@extends('app')

@section('content')
    <h1>About Me</h1>

    @if(count($peoples))
        <h3>Name of peoples</h3>
        <ul>
            @foreach($peoples as $people)
                <li>{{$people}}</li>
            @endforeach
        </ul>
    @endif

    <p>So you've learned a bit about registering routes, and dispatching to controller methods, but how exactly do we
        pass
        data to our views? Let me show you!</p>

@stop