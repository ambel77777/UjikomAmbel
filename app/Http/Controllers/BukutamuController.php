<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bukutamu;

class BukutamuController extends Controller
{
    // Menampilkan halaman buku tamu
    public function index()
    {
        return view('buktamuser/us'); // Pastikan ini sesuai dengan file view Anda
    }

    // Menyimpan data buku tamu
    public function simpan(Request $request)
    {
        dd($request->all());
    }
}
