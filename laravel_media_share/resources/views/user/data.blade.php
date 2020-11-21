@extends('layouts.user')
@section('judul','DATA')
@section('konten')


<div class="content">
	<!--<div class="box">-->
    <h4>Data Covid-19 Update</h4>
        <div class="con1">
            <div class="card">
                <div class="card-header">
                    Data
                </div>
                <div class="card-body">
                    <h5 class="card-title">Kasus Global</h5>
                    <div class="row">
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Terkonfirmasi Positif</h5>
                              <p class="card-text"><i class="fa fa-user"></i> 55.6 Juta</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Dalam Perawatan</h5>
                              <p class="card-text"><i class="fa fa-medkit"></i> 22.5 Juta</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Berhasil di obati</h5>
                              <p class="card-text"><i class="fa fa-plus"></i> 35.8 Juta</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Meninggal Dunia</h5>
                              <p class="card-text"><i class="fa fa-xing-square"></i> 1.34 Juta</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h5 class="card-title mt-3">Kasus di Indonesia</h5>
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Terkonfirmasi Positif</h5>
                              <p class="card-text"><i class="fa fa-user"></i> 474 Ribu</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Dalam Perawatan</h5>
                              <p class="card-text"><i class="fa fa-medkit"></i> 60.426</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Berhasil di obati</h5>
                              <p class="card-text"><i class="fa fa-plus"></i> 399 Ribu</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Meninggal Dunia</h5>
                              <p class="card-text"><i class="fa fa-xing-square"></i> 15.393</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
    </div>
</div>


<div class="content">
	<!--<div class="box">-->
    <h4>Berita Terkini</h4>
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
</div>

@endsection
