<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vendors', App\Http\Controllers\VendorController::class);
Route::resource('meals', App\Http\Controllers\MealController::class);

Route::get('dashboard', function() 
{
    return view('admin');
})->name('dashboard');


Route::get('chef',[App\Http\Controllers\ChefController::class, 'index']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
