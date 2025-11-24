<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/pcr', function () {
    return 'selamat datang di website kampus PCR!';
});

// ... routes lainnya ...

// Public Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Redirect root to DASHBOARD (YANG DIUBAH)
Route::get('/', function () {
    return redirect('/dashboard');
});

// Protected Routes (harus login)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    // CRUD Routes
    Route::resource('users', UserController::class);
    Route::resource('pelanggan', PelangganController::class);

    Route::get('/user-index', function () {
        return 'Halaman Users sementara';
    })->name('user.index');

// Public Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// ... lanjutan routes yang ada
});
