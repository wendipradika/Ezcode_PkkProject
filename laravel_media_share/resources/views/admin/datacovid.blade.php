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
                              <p class="card-text"><i class="fa fa-user"></i>{{ $kasusGlobal['positif'] }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Dalam Perawatan</h5>
                              <p class="card-text"><i class="fa fa-medkit"></i> {{ $kasusGlobal['positif'] - $kasusGlobal['meninggal']- $kasusGlobal['diobati'] }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Berhasil di obati</h5>
                              <p class="card-text"><i class="fa fa-plus"></i> {{ $kasusGlobal['diobati'] }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Meninggal Dunia</h5>
                              <p class="card-text"><i class="fa fa-xing-square"></i>{{ $kasusGlobal['meninggal'] }}</p>
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
                              <p class="card-text"><i class="fa fa-user"></i>{{ $kasusIndonesia['positif'] }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Dalam Perawatan</h5>
                              <p class="card-text"><i class="fa fa-medkit"></i> {{ $kasusIndonesia['positif'] - $kasusIndonesia['meninggal']- $kasusIndonesia['diobati'] }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Berhasil di obati</h5>
                              <p class="card-text"><i class="fa fa-plus"></i>{{ $kasusIndonesia['diobati'] }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Meninggal Dunia</h5>
                              <p class="card-text"><i class="fa fa-xing-square"></i>{{ $kasusIndonesia['meninggal'] }}</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
    </div>
@endsection
