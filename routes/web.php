<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Halaman login, tampil pertama kali untuk melakukan login
Route::get('/', [PageController::class, 'login'])->name('login');

// Proses login, mengecek kecocokan username dan password dengan data anggota Himatif
Route::post('/login', [PageController::class, 'doLogin'])->name('doLogin');

// Dashboard, halaman utama yang tampil setelah login
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Pengelolaan, menampilkan daftar seluruh anggota Himatif
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

// Profile, menampilkan data anggota yang sedang login
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

// Logout, menghapus session dan kembali ke halaman login
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
