@extends('layouts.admin')
@section('judul','Admin - detail berita')

@section('konten')

    <h4>Halaman Detail</h4>
        <div class="con1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detail Berita</h5>
                    <div class="card mb-3">
                        <img style="width: 500px" src="/storage/image/{{ $berita['gambar'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{ $berita['judul'] }}</h5>
                          <p class="card-text">{{ $berita['deskripsi'] }}</p>
                          {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                        </div>
                      </div>
                </div>
            </div>
    </div>
@endsection
