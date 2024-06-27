@extends('papa')
@section('kontent')
    <div class="container" style="padding: 5rem;" id="ftanaman">
        <div class="card">
            <form action="{{url('tanaman/simpan')}}" method="post">
            @csrf
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="card-body">
                <h4 class="card-title">Daftar Tanaman</h4>

                <div class="form-group">
                    <label for="">Nama Tanaman</label>
                    <input type="text" name="nama" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" name="desk" id="" class="form-control">
                </div>
            </form>
                <div class="card-footer">
                    <input type="submit" onclick="return confirm('Apakah anda yakin?')"  value="Simpan" class="btn btn-primary">
                    <a href="{{url('tanaman')}}" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Keluar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
