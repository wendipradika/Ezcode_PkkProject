@extends('layouts.user')
@section('judul','HOME')

@section('konten')

<div class="banner">
    <div class="app-text">
        <h1>Selamat Datang <br> di Aplikasi pelayanan publik Kami</h1>
                <p>Anda dapat mengetahui berita-berita terupdate tentang pandemi Covid19, <br> dan kami pastikan anda tidak akan tertinggal informasi.</p>
            </div>
            <div class="app-picture">
                <img src="{{ asset('image/jeleme.png') }}" alt="">
            </div>
        </div>

        <div class="banner1">
            <div class="app-picture1">
                <img src="{{ asset('image/2.png') }}" alt="">
            </div>
            <div class="app-text1">
                <h1>Kunjungi<br> halaman Berita  di atas</h1>
                <p>Klik link Berita di atas, maka anda akan langsung dipindahkan ke halaman berita yang menyangkut segala informais tentang pandemi. <br>.</p>
            </div>
        </div>

        <div class="banner2">
            <div class="app-text2">
                <h1>Memiliki Masalah? atau Pertanyaan?<br> Ajukan pertanyaan anda</h1>
                <p>Pada halaman Ajukan Pertanyaan anda dapat mengajukan pertanyaan anda kepada customer service kami, dimana mereka akan menjawab keluhan anda. <br>.</p>
            </div>
            <div class="app-picture2">
                <img src="{{ asset('image/3.png') }}" alt="">
            </div>
        </div>

        <div class="banner3">
            <div class="app-picture3">
                <img src="{{ asset('image/4.png') }}" alt="">
            </div>
            <div class="app-text3">
                <h1>Ingin info lebih lanjut?<br>Hubungi Petugas</h1>
                <p>Anda ingin info lebih lanjut? Klik halaman Hubungi untuk menghubungi petugas kami.<br>.</p>
            </div>
        </div>
@endsection
