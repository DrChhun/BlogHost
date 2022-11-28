@extends('user.main')

@section('title')
    Home Page
@endsection

@section('content')
    <!-- hero section -->
    <div class="bg-blue-200 h-[480px] md:h-[640px] w-full relative mb-[1.5rem] overflow-hidden rounded-sm">
        <video autoplay muted loop class="object-cover h-[100%] w-full absolute blur-md scale-105" src="/assets/videoplayback.mp4"></video>
        <h1 class="text-4xl text-white md:text-7xl lg:text-8xl xl:w-[50%] p-[1rem] md:p-[3.5rem] font-extrabold uppercase absolute bottom-0 md:top-0">learn from experience</h1>
    </div>

    <!-- recent content -->

    <div data-aos="zoom-in" class="md:pb-[5rem] md:pt-[6rem] pt-[2.5rem]">
        <h1 class="mb-[1rem] text-4xl font-bold">Recent</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach($post as $post)
            <div class="mb-[2rem] md:mb-0">
                <a href="/content/{{$post->id}}">
                <img class="mb-[1.5rem] h-[260px] w-[100%] object-cover hover:object-cover hover:scale-105 duration-200" @if($post-> image1) src="{{ asset('storage/'.$post->image1) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif>
                    <h1 class="mb-[.5rem] text-xl font-extrabold truncate">{{$post->title}}</h1>
                    <h1 class="mb-[.5rem] truncate">{{$post->text1}}</h1>
                    <h1>{{$post->created_at->todatestring()}}</h1>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <!-- auto content -->
        <div data-aos="zoom-in" class="md:pb-[5rem] pt-[2.5rem]">
        <h1 class="mb-[1rem] text-4xl font-bold">Auto</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach($auto as $auto)
                <div class="mb-[2rem] md:mb-0">
                    <a href="/content/{{$auto->id}}">
                    <img class="mb-[1.5rem] h-[260px] w-[100%] object-cover hover:object-cover hover:scale-105 duration-200" @if($auto-> image1) src="{{ asset('storage/'.$auto->image1) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif>
                        <h1 class="mb-[.5rem] text-xl font-extrabold truncate">{{$auto->title}}</h1>
                        <h1 class="mb-[.5rem] truncate">{{$auto->text1}}</h1>
                        <h1>{{$auto->created_at->todatestring()}}</h1>
                    </a>
                </div>
                @endforeach

            </div>
        </div>

    <!-- mobile content -->
    <div data-aos="zoom-in" class="md:pb-[5rem] pt-[2.5rem]">
        <h1 class="mb-[1rem] text-4xl font-bold">Mobile</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach($mobile as $mobile)
            <div class="mb-[2rem] md:mb-0">
                <a href="/content/{{$mobile->id}}">
                <img class="mb-[1.5rem] h-[260px] w-[100%] object-cover hover:object-cover hover:scale-105 duration-200" @if($mobile-> image1) src="{{ asset('storage/'.$mobile->image1) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif>
                    <h1 class="mb-[.5rem] text-xl font-extrabold truncate">{{$mobile->title}}</h1>
                    <h1 class="mb-[.5rem] truncate">{{$mobile->text1}}</h1>
                    <h1>{{$mobile->created_at->todatestring()}}</h1>
                </a>
            </div>
            @endforeach

        </div>
    </div>

    <!-- Tip content -->
    <div data-aos="zoom-in" class="md:pb-[5rem] pt-[2.5rem]">
        <h1 class="mb-[1rem] text-4xl font-bold">Tips</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
            @foreach($tip as $tip)
            <div class="mb-[2rem] md:mb-0">
                <a href="/content/{{$tip->id}}">
                <img class="mb-[1.5rem] h-[260px] w-[100%] object-cover hover:object-cover hover:scale-105 duration-200" @if($tip-> image1) src="{{ asset('storage/'.$tip->image1) }}" @else src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNU14t4OtvdSZf-rTJAQWI6LdTIw5nYCYT1V3SfHgWja6cYMbG" @endif>
                    <h1 class="mb-[.5rem] text-xl font-extrabold truncate">{{$tip->title}}</h1>
                    <h1 class="mb-[.5rem] truncate">{{$tip->text1}}</h1>
                    <h1>{{$tip->created_at->todatestring()}}</h1>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    
@endsection
