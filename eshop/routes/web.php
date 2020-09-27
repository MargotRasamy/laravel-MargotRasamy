<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingBagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Models\Category;
use App\Models\Product;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
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
Route::get('/', [WebsiteController::class, 'index'] )->name('homepage');
Route::get('/products-list', [ProductController::class, 'index'])->name('products-list');
Route::get('/categories-products-list/{id}', [CategoryController::class, 'index'])->name('categories-products-list');
Route::get('product-detail/{id}', [ProductController::class, 'show'])->name('product-detail');

Route::resource('/products', ProductController::class);

Route::get('/admin', [WebsiteController::class, 'backOffice'])->name('admin');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
        $products = Product::all();
        $categories = Category::all();
        $categoriesBind = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.category_id')
            ->select('categories.*')
            ->orderBy('products.id', 'ASC')
            ->get(); 
        $isLoggedIn = DB::table('sessions')
            ->where('user_id', '!=', 'null')
            ->select('sessions.*')
            ->get();

    return view('dashboard', compact('products', 'categories', 'categoriesBind', 'isLoggedIn'));
})->name('dashboard');

Route::get('products-listed/{request}', [ProductController::class, 'filter'])->name('products-listed');
Route::get('categories-products-listed/{id?}/{request}', [CategoryController::class, 'filter'])->name('categories-products-listed');
Route::get('shopping-bag', [ShoppingBagController::class, 'index'])->name('shopping-bag');
