<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class homecontroller extends Controller
{
    public function index() {
        return view('home');
    }
}
