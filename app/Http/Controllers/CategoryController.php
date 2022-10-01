<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code = null){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }
}
