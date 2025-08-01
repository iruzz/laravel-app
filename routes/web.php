<?php

use App\Http\Controllers\SiswaController;

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