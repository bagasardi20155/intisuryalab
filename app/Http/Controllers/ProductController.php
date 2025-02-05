<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $active = 'dashboard';
        $data = Product::all();

        return view('index', compact('active', 'data'));
    }
}
