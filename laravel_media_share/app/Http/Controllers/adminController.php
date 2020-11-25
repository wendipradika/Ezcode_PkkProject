<?php

namespace App\Http\Controllers;
use App\kasusGlobal;
use App\kasusIndonesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function __construct()
    {
        // if(auth()->user()->level != 'admin'){
        //     abort(403,'Anda tidak memiliki akses untuk halaman ini');

    }

    public function index(){

        return view('admin.index');
    }

    public function dataCovid(){
        $kasusGlobal = kasusGlobal::first();
        $kasusIndonesia = kasusIndonesia::first();
        return view('admin.datacovid',compact('kasusGlobal','kasusIndonesia'));
    }

    public function update(){
        return view('admin.updatecov');
    }

    public function dataBerita(){
        return view('admin.databerita');
    }

    public function tambahBerita(){
        return view('admin.tambahberita');
    }
    public function user(){
        return view('admin.user');
    }



}
