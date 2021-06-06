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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add_product', [App\Http\Controllers\Sklep::class, 'view_add_product'])->name('view_add_product');

Route::get('/products', [App\Http\Controllers\Sklep::class, 'view_products_manage'])->name('view_products_manage');

Route::post('addproduct-form', [App\Http\Controllers\Sklep::class, 'add_product'])->name('add_product');

Route::get('/dash', [App\Http\Controllers\HomeController::class, 'index2'])->name('dash');

Route::get('product/{category}/{product}', [App\Http\Controllers\Sklep::class, 'view_single_product'])->name('single_product');
