<?php

namespace App\Http\Controllers;

use App\Height;
use Illuminate\Http\Request;

class HeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Height';
        return view('user.statistics', compact('name'));
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
     * @param  \App\Height  $height
     * @return \Illuminate\Http\Response
     */
    public function show(Height $height)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Height  $height
     * @return \Illuminate\Http\Response
     */
    public function edit(Height $height)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Height  $height
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Height $height)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Height  $height
     * @return \Illuminate\Http\Response
     */
    public function destroy(Height $height)
    {
        //
    }
}
