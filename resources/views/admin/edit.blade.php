@extends('dashboard')

@section('title')
    <h1>Edit Post</h1>
@endsection

@section('content')
    <div class="h-screen overflow-auto w-[1200px] xl:w-[100%] p-8">
        <table class="table-auto w-[100%]">
            <thead>
                <tr>
                <th class="text-start">ID</th>
                <th class="text-start">Name</th>    
                <th class="text-start">Preview</th>
                <th class="text-start">Category</th>
                <th class="text-start">Date</th>
                <th class="text-start">Change</th>
                </tr>
            </thead>
            <tbody>
                @foreach($controll as $controll)
                <tr>
                    <td>{{$controll->id}}</td>
                    <td>{{$controll->title}}</td>
                    <td><a href="/content/{{$controll->id}}"><img class="h-[75px] w-[125px]" src="{{asset('/storage/'.$controll->image1)}}" /></a></td>
                    <td>{{$controll->category_id}}</td>
                    <td>{{$controll->created_at->todatestring()}}</td>
                    <td><a class="bg-blue-200 p-2 text-blue-500 rounded-sm" href="/edit/content/{{$controll->id}}">Edit</a> / <a class="bg-red-200 p-2 text-red-500 rounded-sm" href="/delete/{{$controll->id}}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection