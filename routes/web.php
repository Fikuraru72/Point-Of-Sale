<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Products
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('beauty-health');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('home-care');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('baby-kid');
});

// Halaman User
Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('user-profile');

// Halaman Penjualan
Route::get('/penjualan', [SalesController::class, 'index'])->name('penjualan');