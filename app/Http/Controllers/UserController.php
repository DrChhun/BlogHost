<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function home() {
        $auto = Content::where('category_id', 1)->orderBy('id', 'desc')->limit(4)->get();
        $mobile = Content::where('category_id', 2)->limit(4)->orderBy('id', 'desc')->get();
        $tip = Content::where('category_id', 3)->limit(4)->orderBy('id', 'desc')->get();
        $post = Content::limit(4)->orderBy('id', 'desc')->get();
        // dd($auto);
        return view('user.home', compact('post', 'auto', 'mobile', 'tip'));
    }

    public function detail($id) {
        $content = Content::where('id', $id)->get();
        $id = Content::where('id', $id)->first();
        $similar = Content::where('category_id', $id->category_id)->where('id', '!=', $id->id)->limit(4)->get();
        return view('user.detail', compact('content', 'similar'));
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
