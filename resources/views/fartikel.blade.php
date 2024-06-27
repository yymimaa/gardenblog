@extends('papa')
@section('kontent')
    <div class="container" style="padding: 5rem;" id="fartikel">
        <div class="card">
            <form action="{{url('artikel/simpan')}}" method="post">
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="card-body">
                <h4 class="card-title">Daftar Artikel</h4>

                <div class="form-group">
                    <label for="">Judul Artikel</label>
                    <input type="text" name="namaa" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" name="deskk" id="" class="form-control">
                </div>
            </form>
                <div class="card-footer">
                    <input type="submit" onclick="return confirm('Apakah anda yakin?')" value="Simpan" class="btn btn-primary">
                    <a href="{{url('artikel')}}" onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger">Keluar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
