<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\Pages\IndexController::class, 'index']);
