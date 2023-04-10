<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
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
/*
    **Basic Routes for a RESTful service: 
    **Route::get($uri, $callback); 
    **Route::post($uri, $callback); 
    **Route::put($uri, $callback); 
    **Route::delete($uri, $callback); 
    ** 
    */
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//creating api endpoints for products 

//Get all products list endpoint
Route::get('products', function () {
    return response(Product::all(), 200);
});
//Get a product using unique ID
Route::get('products/{product}', function ($productId) {
    return response(Product::find($productId), 200);
});
//Creating a new product endpoint
Route::post('products', function (Request $request) {
    $resp = product::create($request->all());
    return $resp;
});
//Updating a product endpoint
Route::put('products/{products}', function (Request $request, $productId) {
    $product = Product::findOrFail($productId);
    $product->update($request->all());
    return $product;
});
//Removing a product from app endpoint
Route::delete('products/{products}', function ($productId) {
    product::find($productId)->delete();
    return 204;
});
*/

Route::get('products', 'App\Http\Controllers\ProductsController@index');

Route::get('products/{product}', 'App\Http\Controllers\ProductsController@show');

Route::post('products', 'App\Http\Controllers\ProductsController@store');

Route::put('products/{product}', 'App\Http\Controllers\ProductsController@update');

Route::delete('products/{product}', 'App\Http\Controllers\ProductsController@delete');
