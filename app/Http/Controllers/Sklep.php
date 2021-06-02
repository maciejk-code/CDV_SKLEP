<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class Sklep extends Controller
{

//    DB MANAGEMENT
    public function add_product(Request $request){

        $product_name = $request->input('product_name');
        $product_price = $request->input('product_price');
        $category = $request->input('category');
        $size = $request->input('size');
        $brand = $request->input('brand');
        $color = $request->input('color');
        $material = $request->input('material');
        $file = $request->file('image');
        $contents = $file->openFile()->fread($file->getSize());

        $data = [
            'name' => $product_name,
            'prize' => $product_price,
            'size' => $size,
            'brand' => $brand,
            'color' => $color,
            'material' => $material,
            'image' => base64_encode($contents)
        ];

        try{
            DB::table($category)->insert($data);
            return json_encode(['success' => true]);
        }catch(Exception $exception){
            json_encode($exception);
        }
    }

    /************/






//    VIEWS
    public function view_add_product(){
        return view('product.add');
    }



    public function view_products_manage(){


        $products = DB::table('trousers')->get();
        $products = $products->merge(DB::table("shirts")->get());
        $products = $products->merge(DB::table("hoodies")->get());
        $products = $products->merge(DB::table("sneakers")->get());
        $products = $products->merge(DB::table("accessories")->get());

//        array_push($products, $product);

        return view('product.manage', ['products' => $products]);
    }
}
