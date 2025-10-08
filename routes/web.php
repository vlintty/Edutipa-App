<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route untuk halaman form (tampil form)
Route::get('/form', [HomeController::class, 'form'])->name('form');

// Route untuk submit form (kirim data)
Route::post('/form', [HomeController::class, 'submit'])->name('form.submit');
