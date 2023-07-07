<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUser;

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


Route::resource('vendors', App\Http\Controllers\VendorController::class)->middleware(CheckUser::class);
Route::resource('meals', App\Http\Controllers\MealController::class)->middleware(CheckUser::class);
Route::resource('users', App\Http\Controllers\UserController::class)->middleware('edit_user');

Route::get('dashboard', function() 
{
    return view('admin');
})->name('dashboard')->middleware(CheckUser::class);


Route::get('chef',[App\Http\Controllers\ChefController::class, 'index']);

Route::get('unauthorized', function() 
{
    return view('unauthorized');
})->name('unauthorized');

Route::get('about',function(){
    return view('about');
});



// password

Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
