<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        $categories = Category::query()->get();
        return view('products.create', compact('categories'));
    }

    public function store(StoreProductRequest $request) {
        Product::query()->create($request->validated());
        return redirect()->route('products.index');
    }

    public function show(Product $product) {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product) {
        $categories = Category::query()->get();
        return view('products.edit', compact('product', 'categories'));
    }
    public function update(UpdateProductRequest $request, Product $product){
        $product->update($request->validated());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
    }

}
