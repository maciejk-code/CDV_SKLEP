<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/products', [App\Http\Controllers\Sklep::class, 'view_products_manage'])->name('view_products_manage');

Route::post('addproduct-form', [App\Http\Controllers\Sklep::class, 'add_product'])->name('add_product');

Route::get('/dash', [App\Http\Controllers\HomeController::class, 'index'])->name('dash');

Route::get('/list/category/{category}/type/{type}', function ($category, $type){
    $products = DB::table($category)->where('brand', '=', $type)->get();
    return view('adminLte.list', ['products' => $products]);
})->name('list');

Route::get('product/{category}/{product}', [App\Http\Controllers\Sklep::class, 'view_single_product'])->name('single_product');

//[App\Http\Controllers\HomeController::class, 'index3'
