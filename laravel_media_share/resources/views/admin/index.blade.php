@extends('layouts.admin')
@section('judul','Admin - Home')

@section('konten')

    <h4>Halaman Dashboard</h4>
    <div class="con1">
        <div class="card">
            <div class="card-header">
                Covid-19 Data
            </div>
            <div class="card-body">
                <h5 class="card-title">Periksa kasus Covid-19</h5>
                <p class="card-text">dengan menuju link di bawah anda akan di bawa ke halaman data</p>
                <a href="datacovid.html" class="btn btn-primary">Kunjungi</a>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                Data Berita
            </div>
            <div class="card-body">
                <h5 class="card-title">Periksa berita tentang Covid-19</h5>
                <p class="card-text">dengan menuju link di bawah anda akan di bawa ke halaman berita</p>
                <a href="databerita.html" class="btn btn-primary">Kunjungi</a>
            </div>
        </div>
    </div>


@endsection
