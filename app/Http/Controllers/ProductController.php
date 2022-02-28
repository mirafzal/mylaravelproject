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
            'price' => \request()->get('price'),
            'category_id' => \request()->get('category_id')
        ]);

        return redirect()->route('products.index');
    }

    public function show($product) {
        $product = Product::query()->find($product);
        return view('products.show', compact('product'));
    }

    public function edit($product) {
        $product = Product::query()->find($product);
        return view('products.edit', compact('product'));
    }
    public function update($product){
        $product = Product::query()->find($product);
        $product->update([
            'name' => \request()->get('name'),
            'price' => \request()->get('price'),
            'category_id' => \request()->get('category_id')
        ]);
        return redirect()->route('products.index');
    }

    public function destroy($product){
        $product = Product::query()->find($product);
        $product->delete();

        return redirect()->route('products.index');
    }

}
