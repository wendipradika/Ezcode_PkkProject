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
                            @foreach ($berita as $brt )
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>
                                    <img style="width:100px" src="storage/image/{{ $brt['gambar'] }}" alt="">
                                    </td>
                                <td>{{ $brt['judul'] }}</td>
                                <td><a href="/edit/berita/{{ $brt['id'] }}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                    <a href="/detail/berita/{{ $brt['id'] }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <form action="/berita/{{$brt->id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <input type="hidden" name="gambar" value="{{ $brt['gambar'] }}">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> </i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>
    </div>

@endsection

