@extends('dashboard')

@section('title')
    <h1 class="">Edit Content</h1>    
@endsection

@section('content')
    <div class="p-8">
        
        <form class="mt-8" action="/editing/{{$match->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Category</label>
                <select name="category" class="p-4 border-2 border-gray-200 focus:outline-0">
                    <option>Choose</option>
                    @foreach($category as $category)
                    <option @selected(old('category', $match->category_id) == $category->id) value="{{$category->id}}" >{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Title</label>
                <input value="{{old('title', $match->title)}}" name="title" class="p-4 border-2 border-gray-200 focus:outline-0" type="text" placeholder="Newest technology..."></input>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Image</label>
                <input value="file.jpg" name="image1" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black" type="file" placeholder="image must less than 1MB"></input>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Content</label>
                <textarea id="summernote" value="hello" name="text1" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black" type="text" placeholder="a current century we all need...">{!!$match->text1!!}</textarea>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Image</label>
                <input id="image2" name="image2" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black" type="file" placeholder="image must less than 1MB"></input>
            </div>
            <div class="flex flex-col mb-4">
                <label class="text-xl font-bold mb-2">Content</label>
                <textarea id="summer" name="text2" class="p-4 border-2 focus:outline-0 focus:border-2 focus:border-black h-[auto]" type="text" placeholder="day by day we looking for...">{!!$match->text2!!}</textarea>
            </div>
            <button class="bg-blue-700 p-4 w-[100%] mt-8 rounded-sm font-extrabold hover:bg-blue-600 duration-200 text-white" type="submit">SUBMIT</button>
        </form>
    </div>
@endsection