<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/books/{page}', function ($page) {
//     return 'Ini Halaman Buku Page ke- '.$page;
// });


Route::get('/persegi-panjang', [BookController::class, 'persegi_panjang']);
Route::post('/luas-persegi-panjang', [BookController::class, 'luaspersegipanjang']);

Route::get('/books/{judul}', [BookController::class, 'index']);

Route::get('/user/{name}', function ($name) {
    return '<center><h2>Selamat Datang</h2> <h1>"'.$name.'"</h1></center>';
});

Route::get('/', function () {
    return view('persegi-panjang');
});

