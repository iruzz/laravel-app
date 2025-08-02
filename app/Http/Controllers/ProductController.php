<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import model product
use App\Models\Product;

//import return type View
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        // Fetch all products from the database
        $products = Product::latest()->paginate(10);

        // Return the view with the products data
        return view('products.index', compact('products'));
    }
}
