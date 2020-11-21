@extends('layouts.admin')
@section('judul','Admin - data covid')

@section('konten')

    <h4>Halaman Covid-19</h4>
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
@endsection
