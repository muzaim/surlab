<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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
//     return view('home');
// });

// LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware(['guest']);
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

// PRODUCT
Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{slug}', [ProductController::class, 'show']);
Route::post('/product/search', [ProductController::class, 'search']);


Route::middleware(['auth'])->group(function () {
    // PROFILE
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile/edit', [ProfileController::class, 'update']);


    // TRANSAKSI
    Route::get('/transaction/{id}', [TransactionController::class, 'index']);

    // CHECKOUT
    Route::get('/checkout', [TransactionController::class, 'checkout']);
    Route::post('/store', [TransactionController::class, 'store']);
});
