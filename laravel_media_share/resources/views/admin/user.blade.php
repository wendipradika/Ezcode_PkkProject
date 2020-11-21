@extends('layouts.admin')
@section('judul','Admin - data user')

@section('konten')

    <h4>Halaman Data User</h4>
        <div class="con1">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data User</h5>
                    <table class="table" style="text-align: center;">
                        <thead class="thead-light">
                            <th>NO</th>
                            <th>Username</th>
                            <th>Password</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>User 1</td>
                                <td>Pass 1</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
    </div>
@endsection
