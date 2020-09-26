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
        ->orderBy('products.id', 'ASC')
        ->get(); 
        
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
            ->where('products.id', '!=', $productDetail->id)
            ->select('products.*')
            ->orderBy('products.id', 'DESC')
            ->get();
            
        // dd($productDetail);
        $categories = DB::table('categories')
            ->where('categories.id', '=', $productDetail->category_id)
            ->select('categories.*')
            ->get();

        // dd($categories);
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

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $products = Product::all();
        $categories = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.category_id')
            ->select('categories.*')
            ->orderBy('products.price', 'ASC')
            ->get();

        dd($request);
        return view('/layouts/products-list', compact('products', 'categories'));
    }
}
