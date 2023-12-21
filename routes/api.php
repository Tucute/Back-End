<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\UserController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Products
Route::get('/get-products',[APIController::class,'getProducts']);
Route::get('/get-products/{id}',[APIController::class,'getOneProducts']);

// Users
Route::get('/get-users',[APIController::class,'getUser']);
// Auth
Route::post('/register',[UserController::class,'Register']);
Route::post('/login',[UserController::class,'Login']);
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout',[UserController::class,'Logout']);
});

// Categories
Route::get('/get-categories',[APIController::class,'getCategories']);
