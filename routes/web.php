<?php

use App\Http\Controllers\SiswaController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', 
[SiswaController::class, 'baca']);

Route::get('/siswa/{id}', function ($id) {
    return "ID Siswa: " . $id;
});

Route::view('/admin', 'admin.index');