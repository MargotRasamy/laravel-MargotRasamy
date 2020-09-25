<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/', [WebsiteController::class, 'index'])->name('homepage');
Route::get('/products-list', [WebsiteController::class, 'productsList'])->name('products-list');
Route::get('/product-detail', [WebsiteController::class, 'productDetail'])->name('product-detail');
Route::resource('/pro', ProductController::class);