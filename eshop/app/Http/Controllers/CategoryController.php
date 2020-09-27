<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $category = Category::findOrFail($id);

        $products = DB::table('products')
            ->where('products.category_id', '=', $category->id)
            ->select('products.*')
            ->orderBy('products.id', 'DESC')
            ->get();
        
        $isLoggedIn = DB::table('sessions')
            ->where('user_id', '!=', 'null')
            ->select('sessions.*')
            ->get();
        
        return view('/layouts/products-list', compact('category', 'products', 'isLoggedIn'));
   
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
        //
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
     * @param  int $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request, $id)
    {
        if ($request->path() === 'categories-products-listed/' . $id . '/lowtohigh') {
            $category = Category::findOrFail($id);
            $products = DB::table('products')
                ->where('products.category_id', '=', $category->id)
                ->select('products.*')
                ->orderBy('products.price', 'ASC')
                ->get();
        }
        else if ($request->path() === 'categories-products-listed/' . $id . '/hightolow') {
            $category = Category::findOrFail($id);
            $products = DB::table('products')
                ->where('products.category_id', '=', $category->id)
                ->select('products.*')
                ->orderBy('products.price', 'DESC')
                ->get();
        }

        $isLoggedIn = DB::table('sessions')
            ->where('user_id', '!=', 'null')
            ->select('sessions.*')
            ->get();
        return view('/layouts/products-list', compact('products', 'category', 'isLoggedIn'));
    }
}
