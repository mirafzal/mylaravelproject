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

//        redirect()->route('categories.index');
         //Product::factory()->count(10)->create();
        $products = Product::all();
        //$categories = Category::query()->get('name');
       // dd($categories);
//       foreach ($categories as $category){
//
//           $category = $category->name;
//           return $category;
//       }
        return view('products.index', compact('products'));
    }

    public function create() {

        $categories = Category::query()->get();
        return view('products.create', compact('categories'));
    }

    public function store(StoreProductRequest $request) {
        //\Log::info('product created');
        Product::query()->create($request->validated());

        Product::query()->create([
            'name' => \request()->get('name'),
            'price' => \request()->get('price'),
            'category_id' => \request()->get('category_id')
        ]);

        return redirect()->route('products.index');
    }

    public function show(Product $product) {
        //$product = Product::query()->find($product);
        return view('products.show', compact('product'));
    }

    public function edit(Product $product) {
       // $product = Product::query()->find($product);
        return view('products.edit', compact('product'));
    }
    public function update(UpdateProductRequest $request, Product $product){
       // $product = Product::query()->find($product);

//        $product->update([
//            'name' => \request()->get('name'),
//            'price' => \request()->get('price'),
//            'category_id' => \request()->get('category_id')
//        ]);

        $product->update($request->validated());

        return redirect()->route('products.index');
    }

    public function destroy(Product $product){
        //$product = Product::query()->find($product);
        $product->delete();

        return redirect()->route('products.index');
        //return view('products.index');
    }

}
