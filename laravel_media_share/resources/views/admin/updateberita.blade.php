@extends('layouts.admin')
@section('judul','Admin - update berita')

@section('konten')

    <h4>Update Berita</h4>
        <div class="con1">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Judul</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Gambar</label>
                          </div>
                        <button type="submit" class="btn btn-primary mt-4">Update</button>
                        <a class="btn btn-danger mt-4 ml-1" href="databerita.html">Batal</a>
                    </form>
            </div>
    </div>
@endsection
