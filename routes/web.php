<?php

use App\Http\Controllers\keuangancontroller;
use App\Models\keuangan;
use Illuminate\Support\Facades\Route;
use League\Flysystem\PathPrefixer;
use League\Flysystem\UrlGeneration\PrefixPublicUrlGenerator;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::controller(keuangancontroller::class)->prefix('keuangan')->group(function () {
    route::get('', 'index')->name('keuangan');
    route::get('tambah', 'tambah')->name('keuangan.tambah');
    route::post('tambah', 'simpan')->name('keuangan.tambah.simpan'); 
    route::get('edit/{id}', 'edit')->name('keuangan.edit');
    route::post('edit/{id}', 'update')->name('keuangan.tambah.update'); 
    route::get('hapus/{id}', 'hapus')->name('keuangan.hapus');
    route::get('/downloadpdf',[keuangancontroller::class,'downloadpdf'])->name('keuangan.downloadpdf');
});