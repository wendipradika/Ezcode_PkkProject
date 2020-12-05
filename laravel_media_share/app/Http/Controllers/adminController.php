<?php

namespace App\Http\Controllers;

use App\berita;
use App\kasusGlobal;
use App\kasusIndonesia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function uploadBerita(Request $request){
        $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required|file|image',
        ]);
        $berita = $request->all();
        $file = $request->file('gambar');
        $nama_gambar = time()."-".$request['judul'].".".$file->extension();
        $file->storeAs('public/image',$nama_gambar);
        $berita['gambar'] = $nama_gambar;

        berita::create($berita);

        return redirect(route('tambah-berita'));

    }

    public function dataBerita(){
        $berita = berita::get();
        return view('admin.databerita',compact('berita'));
    }

    public function editBerita($id){
        $berita = berita::whereId($id)->first();
        return view('admin.editberita',compact('berita'));
    }

    public function detailBerita($id){
        $berita = berita::whereId($id)->first();
        return view('admin.detailberita',compact('berita'));
    }

    public function updateBerita(Request $request){

        if($request->hasFile('gambar')){
            $request->validate([
                'judul'=>'required',
                'deskripsi'=>'required',
                'gambar'=>'required|file|image',
            ]);
            $file = $request->file('gambar');
            $nama_gambar = time()."-".$request['judul'].".".$file->extension();
            $file->storeAs('public/image',$nama_gambar);

            Storage::delete('public/image/'.$request['gambarLama']);

            berita::whereId($request['id'])->update([
                'judul'=>$request['judul'],
                'deskripsi'=>$request['deskripsi'],
                'gambar'=>$nama_gambar
            ]);


        }else{
            $request->validate([
                'judul'=>'required',
                'deskripsi'=>'required'
            ]);


            berita::whereId($request['id'])->update([
                'judul'=>$request['judul'],
                'deskripsi'=>$request['deskripsi']
            ]);

        }

        return redirect(route('data-berita'));

    }



    public function tambahBerita(){
        return view('admin.tambahberita');
    }
    public function user(){
        return view('admin.user');
    }

    public function deleteBerita($id){
        berita::destroy($id);
        $gambar= $_POST['gambar'];
        Storage::delete('public/image/'.$gambar);
        return redirect(route('data-berita'));
    }



}
