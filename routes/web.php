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
Route::get('/admin/users', [App\Http\Controllers\Sklep::class, 'view_users'])->name("users_management");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products', [App\Http\Controllers\Sklep::class, 'show_all_products'])->name('view_all_products');

Route::get('/admin/add_product', [App\Http\Controllers\Sklep::class, 'view_add_product'])->name('view_add_product');

Route::get('/admin/products_manage', [App\Http\Controllers\Sklep::class, 'view_products_manage'])->name('view_products_manage');

Route::post('addproduct-form', [App\Http\Controllers\Sklep::class, 'add_product'])->name('add_product');

Route::get('/dash', [App\Http\Controllers\HomeController::class, 'index'])->name('dash');

Route::get('/list/category/{category}/type/{type}', [App\Http\Controllers\Sklep::class, 'list'])->name('list');

Route::get('/nike', [App\Http\Controllers\Sklep::class, 'nike'])->name('nike');

Route::get('product/{category}/{product}', [App\Http\Controllers\Sklep::class, 'view_single_product'])->name('single_product');

//[App\Http\Controllers\HomeController::class, 'index3'
