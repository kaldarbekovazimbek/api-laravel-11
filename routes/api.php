<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{product_id}', [ProductController::class, 'show']);
Route::post('/product', [ProductController::class, 'store']);
Route::put('/product/{product_id}', [ProductController::class, 'update']);
Route::delete('/product/{product_id}', [ProductController::class, 'delete']);
