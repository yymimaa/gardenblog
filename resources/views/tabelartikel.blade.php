@extends('papa')
@section('kontent')
    <div class="container" style="padding: 6rem;" id="artikel">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Artikel</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d => $r)
                            <tr>
                                <td>{{$d +1}}</td>
                                <td>{{$r->gambar}}</td>
                                <td>{{$r->judul_artikel}}</td>
                                <td>{{$r->desk_artikel}}</td>
                                <td>
                                    <a href="{{url('artikel/hapus/'.$r->id_artikel)}}" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
            <div class="card-footer">
                <a href="{{url('artikel/tambah')}}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>

@endsection
