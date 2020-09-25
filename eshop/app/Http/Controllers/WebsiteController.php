<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    /**
     * @return View
     */
    public function index() {
        return view('/homepage'); 
    }

    public function productsList() {
        return view('/layouts/products-list'); 
    }

    public function product() {
        return view('/layouts/partials/product'); 
    }
}
