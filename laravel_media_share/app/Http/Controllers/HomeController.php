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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        if (isset(auth()->user()->level)) {

            if (auth()->user()->level == 'user') {
                return redirect('/user');
            } else if (auth()->user()->level == 'admin') {
                return redirect('/admin');
            }
        } else {
            return view('user.index');
        }
    }
}
