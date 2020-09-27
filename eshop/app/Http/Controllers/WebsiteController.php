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
        else {
            return view('/homepage', compact('products', 'categories', 'categoriesBind', 'isLoggedIn')); 
        }
        
    }

    // Super sympa le projet ecommerce en Laravel, Pierre ! J'ai beaucoup appris mais malheureusement, 
    // je n'ai pas eu le temps de tout faire car j'ai pris beaucoup de temps pour me familiariser avec Laravel :P
    // Aussi, j'ai rencontré plusieurs bugs dû au cache qu'il fallait clear. Merci pour ce projet !

    public function backOffice() {
        return view('/backoffice'); 
    }
}
