<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin_panel'])->name('admin_panel');
Route::get('/users', [App\Http\Controllers\Sklep::class, 'view_users'])->name("users_management");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add_product', [App\Http\Controllers\Sklep::class, 'view_add_product'])->name('view_add_product');

Route::get('/admin/products_manage', [App\Http\Controllers\Sklep::class, 'view_products_manage'])->name('view_products_manage');

Route::post('addproduct-form', [App\Http\Controllers\Sklep::class, 'add_product'])->name('add_product');

Route::get('/dash', [App\Http\Controllers\HomeController::class, 'index'])->name('dash');

Route::get('/list/category/{category}/type/{type}', function (Request $request, $category, $type){
    $products_query = DB::table($category)->where('type', '=', $type);
    $color = $request->query('color');
    $size = $request->query('size');
    $brand = $request->query('brand');
    $material = $request->query('material');
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
    $products = $products_query->get();
    return view('adminLte.list', ['products' => $products]);

})->name('list');

Route::get('/nike', [App\Http\Controllers\Sklep::class, 'nike'])->name('nike');

Route::get('product/{category}/{product}', [App\Http\Controllers\Sklep::class, 'view_single_product'])->name('single_product');

//[App\Http\Controllers\HomeController::class, 'index3'
