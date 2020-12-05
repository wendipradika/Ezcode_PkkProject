@extends('layouts.admin')
@section('judul','Admin - tambah berita')

@section('konten')

    <h4>Tambah Berita</h4>
        <div class="con1">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('upload-berita') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Judul</label>
                          <input type="text" name="judul" class="form-control" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="5"></textarea>
                          </div>
                          <div class="custom-file">
                            <input type="file"  name="gambar" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Gambar</label>
                          </div>
                        <button type="submit" class="btn btn-primary mt-4">Tambah</button>
                        <a class="btn btn-danger mt-4 ml-1" href="databerita.html">Batal</a>
                    </form>
            </div>
    </div>
@endsection
