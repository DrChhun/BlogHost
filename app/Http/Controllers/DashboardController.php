<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Content;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function overview() {

        return view('admin.overview');

    }

    public function post() {

        $category = Category::all();
        return view('admin.post', compact('category'));

    }

    public function editpage() {

        $controll = Content::all();
        // dd($controll);
        return view('admin.edit', compact('controll'));

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
        $match = Content::findOrFail($id);
        $category = Category::all();
        return view('admin.editing', compact('match', 'category'));
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
        // dd($request->all());

        $check = Content::findOrfail($id);

        $request->validate([
            'title' => 'required',
            'image1' => 'nullable|image',
            'text1' => 'required|max:2000',
            'image2' => 'nullable|image',
            'text2' => 'required|max:2000',
            'category_id' => 'nullable'
        ]);
    
        if ($request->image1) {
            $image1 = $request->image1->store('post');
        } else {
            $image1 = $check->image1;
        }

        if ($request->image2) {
            $image2 = $request->image2->store('post');
        } else {
            $image2 = $check->image2;
        }

        $post = Content::where("id", $check->id)->update([
                    'title' => $request->title,
                    'image1' => $image1,
                    'text1' => $request->text1,
                    'image2' => $image2,
                    'text2' => $request->text2,
                    'category_id' => $request->category
                ]);

        dd($post);

        $category = Category::find($request->category);

        $check->category()->associate($category);

        $check->save();

        return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $delete = Content::where('id', $id)->get();

        $delete->each->delete();

        return redirect()->back();
    }
}
