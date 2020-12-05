@extends('layouts.admin')
@section('judul','Admin - update covid')

@section('konten')

    <h4>Update Data Covid-19</h4>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Data Covid Global</div>
                <div class="card-body">

                    <form action="{{ route('updateCovGlobal') }}" method="post" >
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="positif">Positif</label>
                            <input class="form-control" type="number" value="{{ $kasusGlobal['positif'] }}" name="positif" id="positif">
                        </div>
                        <div class="form-group">
                            <label for="diobati">diobati</label>
                            <input class="form-control" type="number" value="{{ $kasusGlobal['diobati'] }}" name="diobati" id="diobati">
                        </div>
                        <div class="form-group">
                            <label for="meninggal">meninggal</label>
                            <input class="form-control" type="number" value="{{ $kasusGlobal['meninggal'] }}" name="meninggal" id="meninggal">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Data Covid Indonesia</div>
                <div class="card-body">

                    <form action="{{ route('updateCovIndonesia') }}" method="post" >
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="positif">Positif</label>
                            <input class="form-control" type="number" value="{{ $kasusIndonesia['positif'] }}" name="positif" id="positif">
                        </div>
                        <div class="form-group">
                            <label for="diobati">diobati</label>
                            <input class="form-control" type="number" value="{{ $kasusIndonesia['diobati'] }}" name="diobati" id="diobati">
                        </div>
                        <div class="form-group">
                            <label for="meninggal">meninggal</label>
                            <input class="form-control" type="number" value="{{ $kasusIndonesia['meninggal'] }}" name="meninggal" id="meninggal">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
