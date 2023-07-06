<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\stripeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vendors', App\Http\Controllers\VendorController::class);
Route::resource('meals', App\Http\Controllers\MealController::class);

Route::get('dashboard', function() 
{
    return view('admin');
})->name('dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('/home/show_cart', [CartController::class, 'show_cart'])->name('show_cart');
Route::get('/home/remove_cart/{id}', [CartController::class, 'remove_cart'])->name('remove_cart');
Route::get('/cash_order', [OrderController::class, 'cash_order'])->name('cash_order');
Route::get('/stripe/{totalprice}', [StripeController::class, 'stripe'])->name('stripe');
Route::post('/stripe/{totalprice}', [StripeController::class, 'stripePost'])->name('stripe.post');
Route::get('/order', [OrderController::class, 'show_orders'])->name('show_orders');