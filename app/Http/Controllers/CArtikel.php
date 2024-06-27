<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;

class CArtikel extends Controller
{
    public function tampil(){
        $data = Artikel::all();
        return view('tabelartikel', compact('data'));
    }

    public function hapus($id){
        $cari = Artikel::findOrFail($id);
        $cari->delete();
        return redirect('artikel');
    }

    public function tambah(){
        return view('fartikel');
    }

    public function simpan(Request $r){
        $s = new Artikel();
        $s->gambar = "gbr.jpg";
        $s->judul_artikel = $r->namaa;
        $s->desk_artikel = $r->deskk;
        $s->save();
        return redirect('artikel');
    }
}
