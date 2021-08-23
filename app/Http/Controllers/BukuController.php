<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BukuController extends Controller
{
    public function index()
    {
    // mengambil data dari table buku
    $buku =  Buku::all();

    // mengirim data buku ke view daftar
    return view('buku', compact('buku'));
    }
}
