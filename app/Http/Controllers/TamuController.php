<?php

namespace App\Http\Controllers;
use App\Models\Tamu;
use Illuminate\Http\Request;
class TamuController extends Controller
{
    public function form()
    {
        return view('tamu  ');
    }

    public function simpan(Request $request)
    {
        Tamu::create([
            'nama'=> $request->nama,
            'nomorkamar' => $request->nomorkamar,
            'tanggalcheckin' => $request->tanggalcheckin,
            'tanggalcheckout' => $request->tanggalcheckout,
            'statuspembayaran' => $request->statuspembayaran,
        ]);

        return "Data Tamu berhasil disimpan!";
    }

    public function daftarTamu()
    {
        $data = Tamu::all();
        return view('daftar-tamu', ['tamu' => $data]);
    }
}


