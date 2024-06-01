@extends('layouts.app')

@section('title','Form Keuangan')

@section('contents')
<form action="{{ isset ($keuangan) ?route('keuangan.tambah.update', $keuangan->id) : route('keuangan.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($keuangan)?'Form Edit Data':'Form Tambah Data' }}</h6>
                </div>
                <div class="card-body">
                   <div class="form-group">
                    <label for="tanggal">tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{ isset($keuangan) ? $keuangan->tanggal : '' }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">deskprisi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ isset($keuangan) ? $keuangan->deskripsi : '' }}">
                </div>
                <div class="form-group">
                    <label for="kategori">kategori</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" value="{{ isset($keuangan) ? $keuangan->kategori : '' }}">
                </div>
                <div class="form-group">
                    <label for="pemasukan">pemasukan</label>
                    <input type="text" class="form-control" id="pemasukan" name="pemasukan" value="{{ isset($keuangan) ? $keuangan->pemasukan : '' }}">
                </div>
                <div class="form-group">
                    <label for="pengeluaran">pengeluaran</label>
                    <input type="text" class="form-control" id="pengeluaran" name="pengeluaran" value="{{ isset($keuangan) ? $keuangan->pengeluaran : '' }}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>  
</form>
    
@endsection