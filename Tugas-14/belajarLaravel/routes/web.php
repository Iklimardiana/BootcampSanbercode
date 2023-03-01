<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [PeranController::class, 'index']);
Route::get('/register', [AuthController::class, 'Register']);
Route::post('/welcome', [AuthController::class, 'Welcome']);

Route::middleware(['auth'])->group(function () {
    //Testing Master Template

route::get('/master', function(){
    return view('layouts.master');
});

route::get('/table', function(){
    return view('pages.table');
});

route::get('/data-table', function(){
    return view('pages.data-table');
});

route::get('/dashboard', function(){
    return view('pages.dashboard');
});

//CRUD

//Create Data

//route untuk menambah data ke tabel cast
Route::get('/cast/create', [CastController::class, 'create']);

//route untuk menginput data ke tabel cast
Route::post('/cast', [CastController::class, 'store']);

//Read Data
//Route mengarah ke halaman tampil semua data di tabel cast
route::get('/cast',[CastController:: class, 'index']);

//Route detail cast berdasarkan id
Route::get('cast/{id}',[CastController::class, 'show']);

//Route update
//Route mengarah ke halaman update/ kategori
Route::get('/cast/{id}/edit',[CastController::class, 'edit']);
//Route untuk edit data berdasarkan id cast
Route::put('/cast/{id}', [CastController::class, 'update']);

//Route delete
Route::delete('/cast/{id}', [CastController::class, 'destroy']);

//Route Profile
Route::put('/profile/update', [ProfileController::class, 'update']);
Route::get('/profile', [ProfileController::class, 'index']);
});

//CRUD Peran
route::resource('peran', PeranController::class);

//Authentication
Auth::routes();
