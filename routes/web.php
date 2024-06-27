<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CTanaman;
use App\Http\Controllers\CArtikel;

Route::get('/mangboleh', function () {
    return view ('percobaan');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plant', function () {
    return view('plant');
});

Route::get('/stories', function () {
    return view('stories');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/bolo/{crush}/{nama}', function ($c, $n) {
    return view ('coba', ['orang'=>$c, 'namamu'=>$n]);
});

Route::get('/nggabahayata', function () {
    return 'yobahayase';
});

Route::get('tanaman', [CTanaman::class, 'tampil']);
Route::get('tanaman/hapus/{id}', [CTanaman::class, 'hapus']);
Route::get('tanaman/tambah', [CTanaman::class, 'tambah']);
Route::post('tanaman/simpan', [CTanaman::class, 'simpan']);

Route::get('artikel', [CArtikel::class, 'tampil']);
Route::get('artikel/hapus/{id}', [CArtikel::class, 'hapus']);
Route::get('artikel/tambah', [CArtikel::class, 'tambah']);
Route::post('artikel/simpan', [CArtikel::class, 'simpan']);

