<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{

    function index($judul){

        return view('book',[
            'judul'     => $judul
        ]);

    }

    function persegi_panjang(){
        return view('persegi-panjang');
    }

    public function luaspersegipanjang(Request $request){

        $alas        = $request->get('panjang');
        $tinggi      = $request->get('lebar');

        $hasil       = $alas * $tinggi / 2;

        return view('luas-segitiga', compact('alas','tinggi','hasil'));

    }
}
