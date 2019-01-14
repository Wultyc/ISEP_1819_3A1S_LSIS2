<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }


    /**
     * Show the login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Authenticate user.
     *
     * @return \Illuminate\Http\Response
     */
    public function uAuth(Request $request)
    {
        if(\Auth::attempt(['client_number' => $request->client_number, 'password'=>$request->password])){
            $user = User::where('client_number', $request->client_number)->first();
            \Debugbar::info($user);
            \Auth::login($user);
            return redirect()->intended('/');
        }
        return view('login');
    }

    /**
     * Authenticate user.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        \Auth::logout();
        return redirect('/login');
    }
}
