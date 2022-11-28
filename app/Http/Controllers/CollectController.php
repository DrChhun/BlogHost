<?php

namespace App\Http\Controllers;

use App\Models\Collect;
use Illuminate\Http\Request;

class CollectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function message(Request $request) {
        $request->validate([
            'email' => 'required',
            'message' => 'required'
        ]);

        Collect::create([
            'email' => $request->email,
            'message' => $request->message
        ]);

        return view('user.collected')->with('success', "we'll contact you back soon.");
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
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function show(Collect $collect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function edit(Collect $collect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collect $collect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collect  $collect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collect $collect)
    {
        //
    }
}
