<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        return view('user.index');
    }

    public function berita()
    {
        return view('user.berita');
    }

    public function ajukanPertanyaan()
    {
        return view('user.ajukan-pertanyaan');
    }
}
