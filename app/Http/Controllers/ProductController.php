<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {

//        redirect()->route('categories.index');
         //Product::factory()->count(10)->create();
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store() {
        Product::query()->create([
            'name' => \request()->get('name'),
            'category_id' => \request()->get('category_id'),
            'age' => \request()->get('age')
        ]);

        return redirect()->route('products.index');
    }
    public function show(Request $product) {
        //$product = Product::query()->find($id);
        return view('products.show', compact('product'));
    }
}
