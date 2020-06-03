<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->is_admin) {
        return view('cv');
        }
        else{
            if (auth()->user()->customer=='logolate') {    
                return view('home');}
                if (auth()->user()->customer=='sila') {    
                return view('xx');}
        }
    }
}
