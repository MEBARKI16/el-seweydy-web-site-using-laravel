<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("listMainCategories",[CategoriesController::class,'list{cableCategories}']);

Route::get("listSubCategories/{id}",[CategoriesController::class,'listSubCategories']);

Route::get("getCategoryProducts/{id}",[ProductsController::class,'getCategoryProducts']);

Route::get("getProduct/{id}",[ProductsController::class,'index']);