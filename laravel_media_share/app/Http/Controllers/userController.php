<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
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
