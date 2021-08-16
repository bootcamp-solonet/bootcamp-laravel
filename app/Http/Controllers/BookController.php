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

    function segitiga(){
        return view('persegi-panjang');
    }

    public function luas_segitiga(Request $request){

        $alas        = $request->get('alas');
        $tinggi      = $request->get('tinggi');

        $hasil       = $alas * $tinggi / 2;

        return view('luas-segitiga', compact('alas','tinggi','hasil'));

    }
}
