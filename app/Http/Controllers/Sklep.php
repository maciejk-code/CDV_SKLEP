<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function ajaxRequestPost(Request $request)
    {

    DB::table('shopping_cart')->updateOrInsert([
                'id' => $request->id,
                'user_id' => $request->user_id,
                'category' => $request->category,
    ], ['qty' => $request->qty]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Now you have '.$request->qty.' in the cart.'
            ]
        );
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

    public function show_cart(){
        $cart_items = DB::table('shopping_cart')->where('user_id', '=', Auth::user()->id)->get();

        $cart = [];

        $id = '';
        $category = '';
        $total_amount = 0;
        $qty = '';

        foreach($cart_items as $item){
            $id = $item->id;
            $category = $item->category;
            $qty = $item->qty;
            $actual_item = DB::table($category)->where('id','=', $id)->get();
            $actual_item->qty = $qty;
            array_push($cart, $actual_item);
            $prize = $this->get_product_data($id, $category)->prize;
            $total_amount += $qty*$prize;
        }

        return view('layouts.cart', ['cart' => $cart, 'total_amount'=>$total_amount]);
    }

    public function get_product_data($id, $category){
        return DB::table($category)->where('id', $id)->get()[0];
    }

    public function view_checkout()
    {
        $c1 = DB::table("shopping_cart")->get();
        $amount_to_pay = 0;

        $data = [];

        foreach($c1 as $record) {

            $product = [
                'id' => $record->id,
                'category' => $record->category,
                'qty' => $record->qty,
                'prize' => $this->get_product_data($record->id, $record->category)->prize
            ];

            array_push($data, $product);
            $amount_to_pay += $product['qty']*$product['prize'];
        }

        $data = json_encode($data);

        DB::table('orders')->insert([
            'user' => Auth::user()->id,
            'content' => $data,
            'date_ordered' => now()->toDateString(),
            'is_paid' => 0,
            'payment_method' => 'not set',
            'prize' => $amount_to_pay
        ]);

        DB::table('shopping_cart')->where('user_id', Auth::user()->id)->delete();


        return view('layouts.checkout', ['data' => $data, 'amount_to_pay' => $amount_to_pay]);
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

        return view('product.single', [ 'product' => $product, 'category_id' => 'id', 'product_id' => $product_id, 'category' => $category]);
    }

    public function view_orders(){
        $data = DB::table('orders')->get();
        return view('admin.view_orders', ['data' => $data]);
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

    public function list(Request $request, $category, $type){
        $products_query = DB::table($category)->where('type', '=', $type);
        if($category=='sneakers'){
            $shoes_check = "shoes";
        }else{
            $shoes_check = "";
        }
        $brand_check = "";
        $category_check = "filled";
        $color = $request->query('color');
        $size = $request->query('size');
        $brand = $request->query('brand');
        $material = $request->query('material');
        $min = $request->query('min');
        $max = $request->query('max');
        if($color!="all" && $color!=""){
            $products_query = $products_query->where('color', '=', $color);
        }
        if($size!="all" && $size!=""){
            $products_query = $products_query->where('size', '=', $size);
        }
        if($brand!="all" && $brand!=""){
            $products_query = $products_query->where('brand', '=', $brand);
        }
        if($material!="all" && $material!=""){
            $products_query = $products_query->where('material', '=', $material);
        }
        if($min!=""){
            $products_query = $products_query->where('prize', '>=', $min);
        }
        if($max!=""){
            $products_query = $products_query->where('prize', '<=', $max);
        }

        $products = $products_query->get();
        return view('adminLte.list', ['category' => $category, 'products' => $products, 'brand_check' => $brand_check, 'category_check' => $category_check, 'shoes_check' => $shoes_check]);
    }

    public function nike(Request $request){
        $category = $request->query('category');
        if($category!="all" && $category!=""){
            $products = DB::table($category)->get();
            if($category=='sneakers'){
                $shoes_check = "shoes";
            }
            else{
                $shoes_check = "";
            }
        }
        else{
            $products = $this->getAllProducts();
            $shoes_check = "";
        }
        $brand_check = 'nike';
        $category_check = '';
        $products = $products->where('brand', '=', 'nike');
        $color = $request->query('color');
        $size = $request->query('size');
        $material = $request->query('material');
        $min = $request->query('min');
        $max = $request->query('max');
        if($color!="all" && $color!=""){
            $products = $products->where('color', '=', $color);
        }
        if($size!="all" && $size!=""){
            $products = $products->where('size', '=', $size);
        }
        if($material!="all" && $material!=""){
            $products = $products->where('material', '=', $material);
        }
        if($min!=""){
            $products = $products->where('prize', '>=', $min);
        }
        if($max!=""){
            if($max<$min){
                $max=$min;
            }
            $products = $products->where('prize', '<=', $max);
        }

        return view('adminlte.big-boxes-dash', ['products' => $products, 'brand_check' => $brand_check, 'category_check' => $category_check, 'shoes_check' => $shoes_check]);
    }

    public function adidas(Request $request){
        $category = $request->query('category');
        if($category!="all" && $category!=""){
            $products = DB::table($category)->get();
            if($category=='sneakers'){
                $shoes_check = "shoes";
            }else{
                $shoes_check = "";
            }
        }
        else{
            $products = $this->getAllProducts();
            $shoes_check = "";
        }
        $brand_check = 'adidas';
        $category_check = "";
        $products = $products->where('brand', '=', 'adidas');
        $color = $request->query('color');
        $size = $request->query('size');
        $material = $request->query('material');
        $min = $request->query('min');
        $max = $request->query('max');
        if($color!="all" && $color!=""){
            $products = $products->where('color', '=', $color);
        }
        if($size!="all" && $size!=""){
            $products = $products->where('size', '=', $size);
        }
        if($material!="all" && $material!=""){
            $products = $products->where('material', '=', $material);
        }
        if($min!=""){
            $products = $products->where('prize', '>=', $min);
        }
        if($max!=""){
            if($max<$min){
                $max=$min;
            }
            $products = $products->where('prize', '<=', $max);
        }
        return view('adminlte.big-boxes-dash', ['products' => $products, 'brand_check' => $brand_check, 'category_check' => $category_check, 'shoes_check' => $shoes_check]);
    }

    public function sport(Request $request){
        $category_check = "";
        $category = $request->query('category');
        if($category!="all" && $category!=""){
            $products = DB::table($category)->get();
            if($category=='sneakers'){
                $shoes_check = "shoes";
            }
            else{
                $shoes_check = "";
            }
        }
        else{
            $products = $this->getAllProducts();
            $shoes_check = "";
        }
        $brand_check = "";
        $products = $products->where('type', '=', 'sport');
        $color = $request->query('color');
        $size = $request->query('size');
        $brand = $request->query('brand');
        $material = $request->query('material');
        $min = $request->query('min');
        $max = $request->query('max');
        if($color!="all" && $color!=""){
            $products = $products->where('color', '=', $color);
        }
        if($size!="all" && $size!=""){
            $products = $products->where('size', '=', $size);
        }
        if($material!="all" && $material!=""){
            $products = $products->where('material', '=', $material);
        }
        if($min!=""){
            $products = $products->where('prize', '>=', $min);
        }
        if($max!=""){
            if($max<$min){
                $max=$min;
            }
            $products = $products->where('prize', '<=', $max);
        }
        if($brand!="all" && $brand!=""){
            $products = $products->where('brand', '=', $brand);
        }
        return view('adminlte.big-boxes-dash', ['products' => $products, 'brand_check' => $brand_check, 'category_check' => $category_check, 'shoes_check' => $shoes_check]);
    }
}
