<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama (Beranda)
Route::get('/', function () {
    return view('home'); // Mengembalikan view home.blade.php
})->name('home');

// Route untuk halaman utama (Beranda)
Route::get('/dashboard', function () {
    return view('index'); 
});

// Route untuk halaman Data Mahasiswa
Route::get('/data-mahasiswa', function () {
    return view('data_mahasiswa'); // Mengembalikan view data_mahasiswa.blade.php
})->name('data-mahasiswa');


