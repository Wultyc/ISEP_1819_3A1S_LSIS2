<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('user.profile');
    }

    public function update(Request $request)
    {
        $user = \Auth::user();
        $user->email = $request->email;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->save();
        return redirect('profile');
    }
}
