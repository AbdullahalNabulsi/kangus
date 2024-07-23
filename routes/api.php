<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\RentToolsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'login']);


Route::prefix('users')->middleware('auth:sanctum')->group(function () {
    Route::resource('user', UserController::class);
});

Route::prefix('categories')->middleware('auth:sanctum')->group(function () {
    Route::resource('category', CategoryController::class);
});

Route::prefix('units')->middleware('auth:sanctum')->group(function () {
    Route::resource('unit', UnitController::class);
});

Route::prefix('products')->middleware('auth:sanctum')->group(function () {
    Route::resource('product', ProductController::class);
});

Route::prefix('services')->middleware('auth:sanctum')->group(function () {
    Route::resource('service', ServicesController::class);
});

Route::prefix('address')->middleware('auth:sanctum')->group(function () {
    Route::resource('addres', AddressController::class);
});

Route::prefix('product-types')->middleware('auth:sanctum')->group(function () {
    Route::resource('product-type', ProductTypeController::class);
});

Route::prefix('tools')->middleware('auth:sanctum')->group(function () {
    Route::resource('tool', ToolsController::class);
});

Route::prefix('rent-tools')->middleware('auth:sanctum')->group(function () {
    Route::resource('rent-tool', RentToolsController::class);
});

Route::prefix('quotations')->middleware('auth:sanctum')->group(function () {
    Route::resource('quotation', QuotationController::class);
});

Route::prefix('auth')->middleware('auth:sanctum')->group(function () {
    //TODO
    Route::get('me', [AuthController::class, 'me']);
    Route::put('change-password', [AuthController::class, 'changePassword']);
    Route::put('reset-password', [AuthController::class, 'resetPassword']);
    Route::post('verified-email', [AuthController::class, 'verifiedEmail']);
});

