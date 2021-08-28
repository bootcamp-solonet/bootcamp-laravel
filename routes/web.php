<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BukuController;

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


Route::get('/segitiga', [BookController::class, 'segitiga']);
Route::post('/luas-segitiga', [BookController::class, 'luas_segitiga']);

Route::get('/books/{judul}', [BookController::class, 'index']);

Route::get('buku', [BukuController::class, 'index']);
Route::resource('buku', BukuController::class);

Route::get('/user/{name}', function ($name) {
    return '<center><h2>Selamat Datang</h2> <h1>"'.$name.'"</h1></center>';
});

Route::get('/', function () {   
    return view('persegi-panjang');
});

