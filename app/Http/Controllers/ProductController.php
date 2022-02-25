<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

//        redirect()->route('categories.index');
         //Product::factory()->count(10)->create();
        return view('products', ['products' => Product::all()]);
    }
}
