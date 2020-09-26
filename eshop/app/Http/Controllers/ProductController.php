<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.category_id')
            ->select('categories.*')
            // ordre ascendant
            // ->orderBy('posts.id', 'ASC') 
            // ordre descendant
            ->orderBy('categories.id', 'DESC')
            ->get(); 

        // $posts = DB::table('posts')
            // ->join('users', 'posts.user_id', '=', 'users.id')
            // ->join('categories', 'posts.category_id', '=', 'categories.id')
            // ->select('posts.*', 'users.name as user_name', 'categories.title as category_title')
            // // ordre ascendant
            // // ->orderBy('posts.id', 'ASC') 
            // // ordre descendant
            // ->orderBy('posts.id', 'DESC')
            // ->get();
     

        
        // $categories = DB::table('categories')
        //     ->join('posts', 'posts.category_id', '=', 'categories.id')
        //     ->select('categories.*', 'categories.title as category')
        //     ->get();
        
        return view('/layouts/products-list', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productDetail = Product::findOrFail($id);
        $products = DB::table('products')
            ->where('products.category_id', '=', $productDetail->category_id)
            ->select('products.*')
            // ordre ascendant
            // ->orderBy('posts.id', 'ASC') 
            // ordre descendant du plus récent
            ->orderBy('products.id', 'DESC')
            ->get();
        // dd($productDetail);
        $categories = DB::table('categories')
            ->where('categories.id', '=', $productDetail->category_id)
            ->select('categories.*')
            // ordre ascendant
            // ->orderBy('posts.id', 'ASC') 
            // ordre descendant du plus récent
            ->orderBy('categories.id', 'DESC')
            ->get();
        return view('/layouts/product-detail', compact('productDetail', 'products', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
