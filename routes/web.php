<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\homecontroller;

use Illuminate\Support\Facades\Route;

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/siswa', 
[SiswaController::class, 'baca']);

Route::get('/siswa/{id}', function ($id) {
    return view('siswa.detail', [
        'nomer'=>$id
    ]
    );
});

Route::view('/admin', 'admin.index');

Route::resource('/products', ProductController::class);

Route::get('/home', [homecontroller::class, 'index']);