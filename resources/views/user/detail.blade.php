@extends('user.main')

@section('title')
    Content
@endsection

@section('content')
    <div class="h-full w-full">
        <!-- background -->
    @foreach($content as $content)
        <div class="bg-gray-200 h-[400px] w-full relative rounded-lg">
            <img class="h-full w-full object-cover absolute rounded-lg" src="/assets/crumpled_paper_1405.jpg"></img>
            <div class="flex justify-center">
                <h1 class="mt-[1.5rem] text-3xl md:text-5xl lg:text-7xl font-extrabold flex justify-center absolute">{{$content->title}}</h1>
            </div>
        </div>
        <!-- content image and text content-->
        <div class="w-full h-full flex justify-center">
            <div class="bg-black h-[200px] md:h-[300px] lg:h-[600px] w-[90%] md:w-[80%] relative bottom-[3.5rem] rounded-lg">
                <img class="shadow-xl h-full w-full object-cover rounded-lg" @if($content-> image1) src="{{ asset('storage/'.$content->image1) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif>
            </div>
        </div>

        <div class="w-full h-[auto] flex justify-center">
            <div class="w-full md:w-[80%]">
                <h1 class="mb-[2rem] text-md">Posted at {{$content->created_at}}</h1>
                        <p class="mb-[5rem] break-words">{!!$content->text1!!}</p>
                    <div class="bg-black h-[200px] md:h-[300px] lg:h-[600px] w-[90%] md:w-full mb-[5rem] m-auto mt-8 rounded-lg">
                        <img class="shadow-xl h-full w-full object-cover rounded-lg" @if($content-> image2) src="{{ asset('storage/'.$content->image2) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif>
                    </div>
                    <p class="mb-[5rem] break-words">{!!$content->text2!!}</p>
            </div>
        </div>
    @endforeach
    
    <!-- @if($similar == true) -->
        <div class="md:pb-[2rem] md:pt-[6rem] pt-8">
            <h1 class="mb-[1rem] text-4xl font-bold">@if($similar) Relate @else "" @endif</h1>
            <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach($similar as $similar)
                <div class="">
                    <a href="/content/{{$similar->id}}">
                    <img class="mb-[1.5rem] h-[260px] w-[100%] object-cover rounded-lg" @if($similar-> image1) src="{{ asset('storage/'.$similar->image1) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif>
                        <h1 class="mb-[.5rem] text-lg font-bold truncate">{{$similar->title}}</h1>
                        <!-- <h1 class="mb-[.5rem] truncate">{!!$similar->text1!!}</h1> -->
                        <!-- <h1>{{$similar->created_at->diffForHumans()}}</h1> -->
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    <!-- @else
        <h1>hello</h1>
    @endif -->

    </div>
@endsection