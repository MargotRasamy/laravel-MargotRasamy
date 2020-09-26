<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    /**
     * @return View
     */
    public function index() {
        $products = Product::all();
        $categories = Category::all();
        return view('/homepage', compact('products', 'categories')); 
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
