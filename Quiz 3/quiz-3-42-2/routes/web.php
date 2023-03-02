<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gameController;

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

Route::get('/master', function () {
    return view('layouts.master');
});

//menampilkan gambar ERD
Route::get('/', [gameController::class, 'Home']);

//route untuk menambah data ke tabel game
Route::get('/game/create', [gameController::class, 'create']);

//route untuk menginput data ke tabel cast
Route::post('/game', [gameController::class, 'store']);

//Route mengarah ke halaman tampil semua data di tabel game
route::get('/game',[gameController:: class, 'index']);

//Route detail game berdasarkan id
Route::get('game/{id}',[gameController::class, 'show']);

//Route update
//Route mengarah ke halaman update/ kategori
Route::get('/game/{id}/edit',[gameController::class, 'edit']);
//Route untuk edit data berdasarkan id game
Route::put('/game/{id}', [gameController::class, 'update']);

//Route delete
route::delete('/game/{id}', [gameController::class, 'destroy']);
