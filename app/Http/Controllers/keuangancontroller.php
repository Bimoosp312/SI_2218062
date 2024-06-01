<?php

namespace App\Http\Controllers;

use App\Models\keuangan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;

class keuangancontroller extends Controller
{
    public function index()
    {
        $keuangan = keuangan::get();
        
        return view('keuangan.index',['keuangan'=> $keuangan]);
    }
    
    public function tambah()
    {
        return view('keuangan.form');
    }

    public function simpan(request $request)
    {
        $data =[
            'tanggal'=>$request->tanggal,
            'deskripsi'=>$request->deskripsi,
            'kategori'=>$request->kategori,
            'pemasukan'=>$request->pemasukan,
            'pengeluaran'=>$request->pengeluaran,                  
        ];

        keuangan::create($data);

        return redirect()->route('keuangan');
    }

    public function edit($id)
    {
        $keuangan = keuangan::find($id)->first();
        
        return view('keuangan.form',['keuangan'=> $keuangan]);
    }

    public function update($id, request $request)
    {
        $data =[
            'tanggal'=>$request->tanggal,
            'deskripsi'=>$request->deskripsi,
            'kategori'=>$request->kategori,
            'pemasukan'=>$request->pemasukan,
            'pengeluaran'=>$request->pengeluaran,                  
        ];

        keuangan::find($id)->update($data);

        return redirect()->route('keuangan');
    }

    public function hapus($id)
    {
        keuangan::find($id)->delete();

        return redirect()->route('keuangan');
    }

    public function downloadPdf()
    {
        $data = keuangan::all();
        $pdf = PDF::loadview('keuangan.pdf', compact('data'));
        $pdf->setPaper('A4','potrait');
        return $pdf->download('keuangan.pdf');
    }
}
