@extends('layouts.admin')
@section('judul','Admin - update covid')

@section('konten')

    <h4>Update Data Covid-19</h4>
        <div class="con1">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Data</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
            </div>
    </div>
@endsection
