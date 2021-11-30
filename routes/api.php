<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderControllerAPI;
use App\Http\Controllers\API\OrderPostController;
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

// Route::get('orders',[\App\Http\Controllers\API\OrderControllerAPI::class,'index']);

Route::post('login',[OrderControllerAPI::class,'login']);
Route::post('register',[OrderControllerAPI::class,'register']);




Route::get('get-all-posts',[OrderPostController::class,'getAllPosts']);
Route::get('get-post',[OrderPostController::class,'getPost']);
Route::get('search-post',[OrderPostController::class,'searchPost']);
