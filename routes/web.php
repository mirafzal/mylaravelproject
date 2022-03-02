<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('test', function () {
////    $category = \App\Models\Category::query()->find(1);
////    dd($category->products);
//    $product = \App\Models\Product::query()->findOrFail(2);
//    dd($product->category);
//});

Route::get('users', [UserController::class, 'index']);

Route::get('categories', [CategoryController::class, 'index'])->name('main');
//Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
//Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
//Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
//Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
//Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
//Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::resource('categories', CategoryController::class);


//Route::get('products', [ProductController::class, 'index'])->name('products.index');
//Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
//Route::post('products',[ProductController::class, 'store'])->name('products.store');
//Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
//Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
//Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
//Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy);

Route::resource('products', ProductController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
