<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

use App\http\Requests\CreateProductRequest;
use App\http\Requests\UpdateProductRequest;

class ApiProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json([
                    'status' => true,
                    'products' => $products
                ]);
    }

    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->all());
        
        return response()->json([
            'status' => true,
            'message' => "Product Created successfully!",
            'product' => $product
        ], 200);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        
        return response()->json([
            'status' => true,
            'message' => "Product Updated successfully!",
            'product' => $product
        ], 200);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json([
            'status' => true,
            'message' => "Product Deleted successfully!",
        ], 200);
    }
}
