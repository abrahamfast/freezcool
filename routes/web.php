<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\{
	IndexController, AboutController, WeblogController, ContactController,
	ProductController, CompareController, CalculatorController, StaticController
};
use App\Http\Controllers\Profile\{
	TrackOrderController, WishListController, CardController, DashboardController,
	ProfileController, AdviserController, OrderController, AddressController
};


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');

Route::get('/delivery-information', [ App\Http\Controllers\StaticController::class, 'getDelivery']);
Route::get('/privacy-policy', [ App\Http\Controllers\StaticController::class, 'getDelivery']);
Route::get('/returns', [ App\Http\Controllers\StaticController::class, 'getDelivery']);
Route::get('/affiliate', [ App\Http\Controllers\StaticController::class, 'getDelivery']);
Route::get('/certificates', [ App\Http\Controllers\StaticController::class, 'getDelivery']);
Route::get('/faq', [ App\Http\Controllers\StaticController::class, 'getFaq']);

Route::get('/blog', [WeblogController::class, 'index'])->name('blog');
Route::get('/blog/single', [WeblogController::class, 'show'])->name('blog.show');
Route::get('/shop-list', [ProductController::class, 'index'])->name('shop-list');
Route::get('/product/single', [ProductController::class, 'show'])->name('product');
Route::get('/btu/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::get('/btu/calculator/result', [CalculatorController::class, 'show'])->name('calculator.result');
Route::get('/track-order', [TrackOrderController::class, 'index'])->name('order.track');
Route::get('/wishlist', [WishListController::class, 'index'])->name('profile.wishlist');
Route::get('/cart', [CardController::class, 'index'])->name('cart');


Route::get('/compare', [CompareController::class, 'index'])->name('compare');
Route::get('/compare/{id}', [CompareController::class, 'add'])->name('compare.add');



Route::middleware(['auth'])->group(function () {
	Route::get('/account-adviser', [AdviserController::class, 'index']);
	Route::get('/account-dashboard', [DashboardController::class, 'index']);
	Route::get('/account-profile', [ProfileController::class, 'show']);
	Route::post('/account-profile', [ProfileController::class, 'store'])->name('profile.save');
	Route::get('/account-orders', [OrderController::class, 'index']);
	Route::get('/account-order-details', [OrderController::class, 'show']);
	Route::get('/account-addresses', [AddressController::class, 'index']);
	Route::get('/account-edit-address', [AddressController::class, 'create']);

	Route::get('/account-wishlist/{id}', [
		WishListController::class, 'link'
	])->name('wishlist.link');
});

Auth::routes();
