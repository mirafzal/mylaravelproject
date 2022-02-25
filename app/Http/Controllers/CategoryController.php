<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
     // Category::factory()->count(10)->create();
        return view('categories', ['categories' => Category::all()]);
    }
}
