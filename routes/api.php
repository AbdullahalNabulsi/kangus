<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'login']);

Route::prefix('user')->middleware('auth:sanctum')->group(function () {
    Route::get('show/{id}', [UserController::class, 'show']);
    Route::get('index', [UserController::class, 'index']);
    Route::put('update/{id}', [UserController::class, 'update']);
    Route::delete('delete/{id}', [UserController::class, 'destroy']);
});

Route::prefix('auth')->middleware('auth:sanctum')->group(function () {
    //TODO
    Route::put('change-password', [AuthController::class, 'changePassword']);
    Route::put('reset-password', [AuthController::class, 'resetPassword']);
    Route::post('verified-email', [AuthController::class, 'verifiedEmail']);
});

