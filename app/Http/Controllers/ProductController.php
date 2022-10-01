<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(20);
        return view('home', compact('products'));
    }

    public function product($category, $product = null){
        return view('product', compact('product'));
    }
}
