<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class MainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function categories(){
        $categories = Category::get();
        return view('categories', compact('categories'));
    }

    public function category($code = null){
        $category = Category::where('code', $code)->first();
        return view('category', compact('category'));
    }

    public function product($product = null){
        return view('product', ['product' => $product]);
    }
}
