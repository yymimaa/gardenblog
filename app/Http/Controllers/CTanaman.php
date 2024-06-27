<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tanaman;

class CTanaman extends Controller
{
    public function tampil(){
        $data = Tanaman::all();
        return view('tabeltanaman', compact('data'));
    }

    public function hapus($id){
        $cari = Tanaman::findOrFail($id);
        $cari->delete();
        return redirect('tanaman');
    }

    public function tambah(){
        return view('ftanaman');
    }

    public function simpan(Request $r){
        $s = new Tanaman();
        $s->gambar = "gbr.jpg";
        $s->nama_tanaman = $r->nama;
        $s->desk = $r->desk;
        $s->save();
        return redirect('tanaman');
    }
}
