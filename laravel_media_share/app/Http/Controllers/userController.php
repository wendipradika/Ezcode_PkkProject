<?php

namespace App\Http\Controllers;

use App\berita;
use App\kasusGlobal;
use App\kasusIndonesia;
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
        $kasusGlobal = kasusGlobal::first();
        $kasusIndonesia = kasusIndonesia::first();
        $berita = berita::get();
        return view('user.berita',compact('kasusGlobal','kasusIndonesia','berita'));
    }

    public function ajukanPertanyaan()
    {
        return view('user.ajukan-pertanyaan');
    }
}
