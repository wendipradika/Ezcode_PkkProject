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
        $kasusGlobal = kasusGlobal::first();
        $kasusIndonesia = kasusIndonesia::first();
        return view('admin.updatecov',compact('kasusGlobal','kasusIndonesia'));
    }

    public function updateCovGlobal(Request $request){
        kasusGlobal::whereId(1)->update([
            'positif' =>$request['positif'],
            'diobati' =>$request['diobati'],
            'meninggal' =>$request['meninggal']
        ]);

        return redirect('/update');
    }

    public function updateCovIndonesia(Request $request){
        kasusIndonesia::whereId(1)->update([
            'positif' =>$request['positif'],
            'diobati' =>$request['diobati'],
            'meninggal' =>$request['meninggal']
        ]);

        return redirect('/update');
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
