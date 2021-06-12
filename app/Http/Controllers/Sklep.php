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
        $type = $request->input('type_'.$category);
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
            $referer = request()->headers->get('referer');
            return redirect( $referer)->with('status', 'Product inserted!');
        }catch(Exception $exception){
            json_encode($exception);
        }
    }

    /************/

//    VIEWS

    private function getAllProducts(){
        $products = DB::table('trousers')->get();
        $products = $products->merge(DB::table("shirts")->get());
        $products = $products->merge(DB::table("hoodies")->get());
        $products = $products->merge(DB::table("sneakers")->get());
        $products = $products->merge(DB::table("accessories")->get());

        return $products;
    }

    public function show_all_products(){
        $accessories = DB::table('accessories')->get();
        $hoodies = DB::table('hoodies')->get();
        $shirts = DB::table('shirts')->get();

        $products = [
            'shirts'=> $shirts,
            'hoodies' => $hoodies,
            'accessories' => $accessories
        ];

        return view('product.show_all', ['products' => $products]);
    }

    public function view_add_product(){
        return view('product.add');
    }

    public function view_single_product(){

        $category = request()->route('category');
        $product_id = request()->route('product');

        $product = DB::table($category)->where('id', '=', $product_id)->get()->first();

        return view('product.single', [ 'product' => $product, 'category_id' => 'id', 'product_id' => $product_id]);
    }

    public function view_products_manage(){

        $products = $this->getAllProducts();


//        array_push($products, $product);

        return view('product.manage', ['products' => $products]);
    }

    public function view_users(){
        $users = DB::table('users')->get();



        return view('admin.users', ['users' => $users]);
    }
    //WIP
    public function nike(Request $request){
        $products = DB::table('trousers')->get();
        $products = $products->merge(DB::table("shirts")->get());
        $products = $products->merge(DB::table("hoodies")->get());
        $products = $products->merge(DB::table("sneakers")->get());
        $products = $products->merge(DB::table("accessories")->get());

        $products_query = $products->where('brand', '=', 'nike');
        $color = $request->query('color');
        $size = $request->query('size');
        $material = $request->query('material');
        if($color!="all" && $color!=""){
            $products_query = $products_query->where('color', '=', $color);
        }
        if($size!="all" && $size!=""){
            $products_query = $products_query->where('size', '=', $size);
        }
        if($material!="all" && $material!=""){
            $products_query = $products_query->where('material', '=', $material);
        }
        $products = $products_query->get();

        return view('adminlte.nike', ['products' => $products]);
    }
}
