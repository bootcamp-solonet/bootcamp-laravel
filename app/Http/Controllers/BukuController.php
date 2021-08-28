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
    return view('buku.index', compact('buku'));
    }

    public function create()
    {
        /// menampilkan halaman create
        return view('buku.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'judul'         => 'required',
            'tahun_terbit'  => 'required',
            'penerbit'      => 'required',
            'id_pengarang'  => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Buku::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('buku.index')
                        ->with('success','Data berhasil di tambahkan.');
    }
  
    public function show(Buku $buku)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.show',$post->id) }}
        return view('buku.show',compact('buku'));
    }
  
    public function edit(Buku $buku)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('buku.edit',compact('buku'));
    }
  
    public function update(Request $request, Buku $buku)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'judul'         => 'required',
            'tahun_terbit'  => 'required',
            'penerbit'      => 'required',
            'id_pengarang'  => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $buku->update($request->all());
         
        /// setelah berhasil mengubah data
        return redirect()->route('buku.index')
                        ->with('success','Data berhasil di update');
    }
  
    public function destroy(Buku $buku)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $buku->delete();
  
        return redirect()->route('buku.index')
                        ->with('success','Data berhasil dihapus');
    }

}
