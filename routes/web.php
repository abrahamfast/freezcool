<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\Pages\IndexController::class, 'index']);
Route::get('/shop-list', [App\Http\Controllers\Pages\ProductController::class, 'index']);
Route::get('/product/{id}', [App\Http\Controllers\Pages\ProductController::class, 'show']);
