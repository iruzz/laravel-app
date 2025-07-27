<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // ← ini yang benar, import model Siswa

class SiswaController extends Controller
{
    public function baca()
    {
        $data = Siswa::all();
        return view('siswa.index', compact('data'));
    }

}
