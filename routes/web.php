<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', [PageController::class, 'index']);
Route::get('/product', [PageController::class, 'productView']);
Route::get('/faq', [PageController::class, 'faq']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/policy', [PageController::class, 'policy']);
Route::post('/contact/store', [PageController::class, 'storeContact']);
Route::get('/our-services/sale-of-inverter-solution-solar-panels', [PageController::class, 'service1'])->name('sale_of_solar_panels');
Route::get('/our-services/meeting-room-projector', [PageController::class, 'service2'])->name('sale_of_solar_panels');
Route::get('/our-services/after-sales-services', [PageController::class, 'service3'])->name('sale_of_solar_panels');
Route::get('/product-details/{product}', [PageController::class, 'productDetails'])->name('details-page');

// cart
Route::get('/cart', [CartController::class, 'cartpage'])->name('cart-page');
Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/{cart}/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::put('/cart/{id}/increment', [CartController::class, 'increment'])->name('cart.increment');
Route::put('/cart/{id}/decrement', [CartController::class, 'decrement'])->name('cart.decrement');

Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout.index');
// Route::post('/cart/update', [CartController::class,'update'])->name('cart.update');
Route::post('/checkout/process', [CheckoutController::class, 'payment'])->name('checkout.process');
Route::get('/checkout/success', [CheckoutController::class, 'handlePaymentCallback'])->name('checkout.success');
require __DIR__.'/admin.php';