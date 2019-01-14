<?php

namespace App\Http\Controllers;

use App\BloodPressure;
use Illuminate\Http\Request;

class BloodPressureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Blood Pressure';
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
     * @param  \App\BloodPressure $bloodPresure
     *
     * @return \Illuminate\Http\Response
     */
    public function show(BloodPressure $bloodPresure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BloodPressure $bloodPresure
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(BloodPressure $bloodPresure)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\BloodPressure       $bloodPresure
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BloodPressure $bloodPresure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BloodPressure  $bloodPresure
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(BloodPressure $bloodPresure)
    {
        //
    }
}
