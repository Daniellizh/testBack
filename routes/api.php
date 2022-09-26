<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ApiProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products', [ApiProductController::class, 'index']);
Route::post('products', [ApiProductController::class, 'store'])->name('api.create');
Route::patch('products/{product}', [ApiProductController::class,'update'])->name('api.update');
Route::delete('products/{product}', [ApiProductController::class,'destroy'])->name('api.delete');

    