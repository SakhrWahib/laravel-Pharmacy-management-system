<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\SalesController;
use App\Http\Controllers\Api\PurchasesController; 







Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});


## ---------------------------------- SETTINGS MODULE
Route::get('/settings', SettingController::class);


## ---------------------------------- products MODULE
Route::get('/products', ProductsController::class);

## ---------------------------------- categories MODULE

Route::get('/categories', CategoriesController::class);

## ---------------------------------- sales MODULE

Route::get('/sales', SalesController::class);
## ---------------------------------- purchases MODULE

Route::get('purchases', PurchasesController::class); // مسار لاستدعاء المراقب مباشرةً

