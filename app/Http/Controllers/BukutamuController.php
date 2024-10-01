<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bukutamu;
use App\Models\Product;

class BukutamuController extends Controller
{
    public function index()
    {
        return view('buktamuser.us');
    }

    // Menyimpan data buku tamu
    public function simpan(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'nama' => 'required|string|max:255',
            'instansi_lembaga' => 'required|string|max:255',
            'tujuan' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
            'no_telpon' => 'required|numeric',
        ]);

        Product::create($request->all());
        return redirect()->back()->with('status', 'Data Berhasil di Simpan!');
    }

}
