<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Http\Controllers\ProductController;

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

// Route::get('/products', [ProductController::class, 'index']);
// Route::post('/products', [ProductController::class, 'store']);
// Route::put('/products/{id}', [ProductController::class, 'update']);
// Route::delete('/products/{id}', [ProductController::class, 'destroy']); 

// crud products
Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::post('/products', 'App\Http\Controllers\ProductController@store');
Route::put('/products/{id}', 'App\Http\Controllers\ProductController@update');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductController@destroy');

// crud sales
Route::get('/sales', 'App\Http\Controllers\SaleController@index');
Route::post('/sales', 'App\Http\Controllers\SaleController@store');
Route::put('/sales/{id}', 'App\Http\Controllers\SaleController@update');
Route::delete('/sales/{id}', 'App\Http\Controllers\SaleController@destroy');

// crud sale headers
Route::get('/sale-headers', 'App\Http\Controllers\SaleHeaderController@index');
Route::post('/sale-headers', 'App\Http\Controllers\SaleHeaderController@store');
Route::put('/sale-headers/{id}', 'App\Http\Controllers\SaleHeaderController@update');
Route::delete('/sale-headers/{id}', 'App\Http\Controllers\SaleHeaderController@destroy');