@extends('layouts.admin')
@section('judul','Admin - edit berita')

@section('konten')

    <h4>Edit Berita</h4>
        <div class="con1">
            <div class="card">
                <div class="card-body">
                    <form action="/edit/berita" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="id" value="{{ $berita['id'] }}">
                        <input type="hidden" name="gambarLama"  value="{{ $berita['gambar'] }}">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Judul</label>
                          <input type="text" value="{{ $berita['judul'] }}" name="judul" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="5">{{ $berita['deskripsi'] }}</textarea>
                          </div>
                          <div class="custom-file">
                            <input type="file"  name="gambar"" class="custom-file-input" id="customFile">
                            <label class="custom-file-label"  for="customFile">Gambar</label>
                          </div>
                        <button type="submit" class="btn btn-primary mt-4">edit</button>
                    </form>
            </div>
    </div>
@endsection
