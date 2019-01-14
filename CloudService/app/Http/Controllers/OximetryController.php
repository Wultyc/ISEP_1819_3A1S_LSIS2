<?php

namespace App\Http\Controllers;

use App\Oximetry;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OximetryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Cardiac Pulse';
        $sat = []; $pulse = []; $date = [];

        $values = Oximetry::where('client_id', \Auth::id())->orderBy('id', 'ASC')->get();
        foreach($values as $value)
        {
            $sat[] = $value->value_oximetry;
            $pulse[] = $value->value_pulse;
            $date[] = Carbon::parse($value->created_at)->toDateTimeString();
        }
        return view('user.statistics', compact('name', 'values', 'sat', 'date', 'pulse'));
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
     */
    public function store( $client = 0, $value = 99)
    {
        if($client !== 0) $user = User::where('client_number', $client)->first();
        else $user = 0;

        $oxival = new Oximetry();
        $oxival->client_id = $user->id;
        $oxival->value_oximetry = 99;
        $oxival->value_pulse = $value;
        $oxival->save();
        return "true";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oximetry  $oximetry
     * @return \Illuminate\Http\Response
     */
    public function show(Oximetry $oximetry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oximetry  $oximetry
     * @return \Illuminate\Http\Response
     */
    public function edit(Oximetry $oximetry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oximetry  $oximetry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oximetry $oximetry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oximetry  $oximetry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oximetry $oximetry)
    {
        //
    }
}
