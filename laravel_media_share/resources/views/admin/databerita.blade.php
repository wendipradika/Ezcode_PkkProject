@extends('layouts.admin')
@section('judul','Admin - data berita')

@section('konten')

    <h4>Halaman Berita</h4>
        <div class="con1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Berita</h5>
                    <table class="table" style="text-align: center;">
                        <thead class="thead-light">
                            <th>NO</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Image 1</td>
                                <td>Judul 1</td>
                                <td><a href="updateberita.html" class="btn btn-info"><i class="fa fa-edit"></i></a><a href="detailberita.html" class="btn btn-success"><i class="fa fa-eye"></i></a><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
            </div>
    </div>

@endsection

