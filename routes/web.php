<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MatakuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function() {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function(){
    return 'Hallo Mahasiswa';
});

Route::get('/nama/{param1}', function($param1){
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function($param1 = ''){
    return 'Nim saya: '.$param1;
});

Route::get('mahasiswa/{param1}', [MahasiswaController::class,'show']);

Route::get('/about', function(){
    return view('halaman-about');
});

Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name(name: 'matakuliah');
Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::get('/home',[QuestionController::class,'index'])
    ->name('home.index');

Route::get('dashboard', [DashboardController::class,'index'])->name('dashboard');


Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

//pelanggan
Route::resource('pelanggan', PelangganController::class);
