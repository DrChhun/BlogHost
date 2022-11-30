@extends('dashboard')

@section('title')
    <h1>Message</h1>
@endsection

@section('content')
    <div class="p-8">
        @foreach($collect as $collect)
            <h1>{{$collect->email}}</h1>
            <p>{{$collect->message}}</p>

            <a href="/delete/message/{{$collect->id}}">Delete</a>
        @endforeach
    </div>
@endsection