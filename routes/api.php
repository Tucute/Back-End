<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\OrderController;
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
Route::get('/get-users/{id}',[APIController::class,'getOneUser']); 
Route::post('update-user',[UserController::class,'UpdateUser']);
// Auth
Route::post('/register',[UserController::class,'Register']);
Route::post('/login',[UserController::class,'Login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout',[UserController::class,'Logout']);
});

// Categories
Route::get('/get-categories',[APIController::class,'getCategories']);

// rating
Route::get('/get-comment/{id_product}',[APIController::class,'getComment']);

// Admin
Route::get('/get-product-admin', [AdminController::class, 'getProductAdminShop']); 
Route::post('/add-product', [AdminController::class, 'addProduct']); 
Route::delete('/delete-product/{id}', [AdminController::class, 'deleteProduct']); 
Route::post('/update-product/{id}', [AdminController::class, 'updateProduct']);

// Orders
Route::get('/get-order', [OrderController::class, 'getOrder']);
Route::post('/order', [OrderController::class, 'PlaceOrder']);