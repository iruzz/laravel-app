<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa; // ← ini yang benar, import model Siswa

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::all();
        return view('siswa.index', compact('data'));
    }
}
