<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendaftarkan semua route aplikasi.
| Route di bawah ini mencakup ProfileController dan UserController.
|
*/

// Route Profile (dari praktikum sebelumnya)
Route::get('/profile/{nama}/{npm}/{kelas}', [ProfileController::class, 'profile']);

// Route bawaan Laravel
Route::get('/', function () {
    return view('welcome');
});

// ----------------------
// Route untuk UserController
// ----------------------

// Menampilkan daftar user
Route::get('/user', [UserController::class, 'index']);

// Menampilkan form untuk tambah user baru
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Menyimpan data user baru ke database
Route::post('/user', [UserController::class, 'store'])->name('user.store');
