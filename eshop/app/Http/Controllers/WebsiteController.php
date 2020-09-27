<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{

    /**
     * @return View
     */
    public function index() {
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
        if(isset($isLoggedIn)) {
            return redirect()->route('dashboard');
        }
        return view('/homepage', compact('products', 'categories', 'categoriesBind', 'isLoggedIn')); 
    }

    // public function productsList() {
    //     return view('/layouts/products-list'); 
    // }

    // public function productDetail() {
    //     return view('/layouts/product-detail'); 
    // }

    public function backOffice() {
        return view('/backoffice'); 
    }
}
