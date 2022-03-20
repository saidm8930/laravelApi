<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingApi;
use App\Http\Controllers\ProductsController;

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

Route::get('data', [TestingApi::class, 'getData']);
Route::get('products', [ProductsController::class,'getProducts' ]);
Route::get('products/{id}',[ProductsController::class, 'getSpecificProduct']);
Route::post('addproducts',[ProductsController::class, 'addProduct']);
Route::put('updateproduct', [ProductsController::class, 'modify']);
Route::get('search/{product_company}', [ProductsController::class, 'search']);
Route::delete('delete/{id}', [ProductsController::class, 'delete']);