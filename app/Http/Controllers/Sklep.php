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
        $type = $request->input('type');
        $description = $request->input('description');
        $contents = $file->openFile()->fread($file->getSize());

        $data = [
            'name' => $product_name,
            'prize' => $product_price,
            'size' => $size,
            'brand' => $brand,
            'color' => $color,
            'material' => $material,
            'image' => base64_encode($contents),
            'type' => $type,
            'description' => $description
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

    public function view_single_product(){

        $category = request()->route('category');
        $product_id = request()->route('product');
        $category_id = 'id';

//        switch($category){
//            case 'hoodies':
//                $category_id = 'id_hoodie';
//                break;
//
//            case 'shirts':
//                $category_id = 'id_shirt';
//                break;
//        }

        $product = DB::table($category)->where($category_id, '=', $product_id)->get()->first();

        return view('product.single', [ 'product' => $product, 'category_id' => $category_id, 'product_id' => $product_id]);
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
