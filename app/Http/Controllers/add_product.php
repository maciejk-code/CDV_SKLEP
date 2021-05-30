<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class add_product extends Controller
{
    public function __construct(){

    }

    public function add_product(){
        return view('product.add');
    }

    public function products_manage(){

        $products = DB::table('products')->get();

        return view('product.manage', ['products' => $products]);
    }
}
