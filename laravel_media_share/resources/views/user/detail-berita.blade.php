@extends('layouts.user')
@section('judul','Detail Berita')
@section('konten')
    <h3 class="m-2">Detail Berita</h3>
    <div class="konten" style="width: 70%; margin:auto">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <img style="" src="/storage/image/{{ $berita['gambar'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $berita['judul'] }}</h5>
                        <p class="card-text">{{ $berita['deskripsi'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
