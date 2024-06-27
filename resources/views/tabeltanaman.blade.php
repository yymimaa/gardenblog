@extends('papa')
@section('kontent')
    <div class="container" style="padding: 4.5rem;" id="tanaman">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Tanaman</h4>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d => $r)
                            <tr>
                                <td>{{$d +1}}</td>
                                <td>{{$r->gambar}}</td>
                                <td>{{$r->nama_tanaman}}</td>
                                <td>{{$r->desk}}</td>
                                <td>
                                    <a href="{{url('tanaman/hapus/'.$r->id_tanaman)}}" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
            <div class="card-footer">
                <a href="{{url('tanaman/tambah')}}" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>

@endsection
