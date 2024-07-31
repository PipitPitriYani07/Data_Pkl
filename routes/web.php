<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SekolahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [LoginController::class, 'home']);

Route::get('/login', [LoginController::class, 'loginpage']);
Route::post('/ceklogin', [LoginController::class, 'ceklogin']);

Route::get('/register', [LoginController::class, 'registerpage']);
Route::post('/cekregister', [LoginController:: class, 'registered']);

Route::get('/indexpeserta', [PesertaController::class, 'indexpeserta']);
Route::post('/daftarpeserta', [PesertaController::class, 'daftarpeserta']);
Route::get('/peserta/edit/{id}', [PesertaController::class, 'edit']);
Route::post('/ubahpeserta/{id}', [PesertaController::class, 'ubah']);
Route::get('/hapuspeserta/{id}',[PesertaController::class, 'hapus']);

Route::get('/indexsekolah', [SekolahController::class, 'indexsekolah']);
Route::post('/daftarsekolah', [SekolahController::class, 'daftarsekolah']);
Route::get('/sekolah/edit/{id}', [SekolahController::class, 'edit']);
Route::post('/ubahsekolah/{id}', [SekolahController::class, 'ubah']);
Route::get('/hapussekolah/{id}',[SekolahController::class, 'hapus']);

Route::get('/logout', [LoginController:: class, 'logout']);


