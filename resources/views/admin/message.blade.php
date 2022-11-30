@extends('dashboard')

@section('title')
    <h1>Message</h1>
@endsection

@section('content')
    <div class="p-8">
        @foreach($collect as $collect)
        <div class="flex justify-between py-4 border-b-[1px]">
            <div>
                <h1>From : {{$collect->email}} <span class="text-xs ml-4">{{$collect->created_at->diffForHumans()}}</span></h1>
                <p>> {{$collect->message}}</p>
            </div>
            <a class="text-red-600" href="/delete/message/{{$collect->id}}">Delete</a>
        </div>
        @endforeach
    </div>
@endsection