@extends('user.main')

@section('content')
<h1 class="mt-[2.5rem] md:mt-0 mb-[1rem] text-4xl font-bold">Auto All</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-[3rem]">
            @foreach($auto as $auto)
            <div data-aos="fade-left" class="">
                <a href="/content/{{$auto->id}}">
                <img class="mb-[1.5rem] h-[260px] w-[100%] object-covern" @if($auto-> image1) src="{{ asset('storage/'.$auto->image1) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif>
                    <h1 class="mb-[.5rem] text-lg font-bold truncate">{{$auto->title}}</h1>
                    <h1 class="mb-[.5rem] truncate">{{$auto->text1}}</h1>
                    <h1>{{$auto->created_at}}</h1>
                </a>
            </div>
            @endforeach

        </div>
@endsection