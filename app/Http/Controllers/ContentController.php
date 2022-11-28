<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\File;
use App\Models\Category;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->back();
    }

    public function posting(Request $request) {

        // dd($request->category);

        $request->validate([
            'title' => 'required',
            'image1' => 'required',
            'text1' => 'required|max:2000',
            'image2' => 'required',
            'text2' => 'required|max:2000',
        ]);

        // dd($request->category);

        $image1 = $request->image1->store('post');
        $image2 = $request->image2->store('post');
        $category = $request->category;

        // dd($category);

        $content = Content::create([
                    'title' => $request->title,
                    'image1' => $image1,
                    'text1' => $request->text1,
                    'image2' => $image2,
                    'text2' => $request->text2,
                    'category_id' => $category
                ]);

        $category = Category::find($request->category);

        $content->category()->associate($category);

        $content->save();

        return redirect()->to('/')->with('message', "You have posted a new content!");
    }

    public function auto() {
        $auto = Content::where('category_id', 1)->orderBy('id', 'desc')->get();
        return view('cate.auto', compact('auto'));
    }

    public function mobile() {
        $mobile = Content::where('category_id', 2)->orderBy('id', 'desc')->get();
        return view('cate.mobile', compact('mobile'));
    }

    public function tips() {
        $tips = Content::where('category_id', 3)->orderBy('id', 'desc')->get();
        return view('cate.tip', compact('tips'));
    }

    public function tech() {
        $tech = Content::where('category_id', 4)->orderBy('id', 'desc')->get();
        return view('cate.tech', compact('tech'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
