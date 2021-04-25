<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\Pages\IndexController::class, 'index'])->name('index');
Route::get('/about-us', [App\Http\Controllers\Pages\AboutController::class, 'index'])->name('about-us');
Route::get('/blog', [App\Http\Controllers\Pages\WeblogController::class, 'index'])->name('blog');
Route::get('/blog/single', [App\Http\Controllers\Pages\WeblogController::class, 'show'])->name('blog.show');
Route::get('/contact-us', [App\Http\Controllers\Pages\ContactController::class, 'index'])->name('contact-us');
Route::get('/shop-list', [App\Http\Controllers\Pages\ProductController::class, 'index'])->name('shop-list');
Route::get('/product/single', [App\Http\Controllers\Pages\ProductController::class, 'show'])->name('product');
Route::get('/compare', [App\Http\Controllers\Pages\CompareController::class, 'index'])->name('compare');
Route::get('/btu/calculator', [App\Http\Controllers\Pages\CalculatorController::class, 'index'])->name('calculator');
Route::get('/btu/calculator/result', [App\Http\Controllers\Pages\CalculatorController::class, 'show'])->name('calculator.result');
Route::get('/profile/order/track', [App\Http\Controllers\Profile\TrackOrderController::class, 'index'])->name('order.track');
Route::get('/wishlist', [App\Http\Controllers\Profile\WishListController::class, 'index'])->name('profile.wishlist');
Route::get('/cart', [App\Http\Controllers\Profile\CardController::class, 'index'])->name('cart');
