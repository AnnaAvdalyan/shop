<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\Admin\CategoryController1;
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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/order/place', [BasketController::class, 'basketConfirm'])->name('basketConfirm');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::post('/basket/add/{id}',[BasketController::class,'basketAdd'])->name('basketAdd');
Route::post('/basket/remove/{id}',[BasketController::class,'basketRemove'])->name('basketRemove');
Route::get('/order', [BasketController::class, 'basketPlace'])->name('order');



Route::middleware(['adminchek'])->group(function() {
    Route::get('/test/test', [CategoryController1::class,'test'])->name('test');
    Route::get('/admin/dashbord', [CategoryController1::class,'dashbord'])->name('dashbord');
//    Route::get('/admin/categories/add', [App\Http\Controllers\Admin\CategoryController1::class,'add'])->name('categoriesAdd');
//    Route::post('/admin/categories/add/check', [App\Http\Controllers\Admin\CategoryController1::class,'addCheck'])->name('addCategoriesCheck');
//
//    Route::get('/admin/products/add', [App\Http\Controllers\Admin\ProductController::class,'add'])->name('productAdd');
//    Route::post('/admin/products/add/check', [App\Http\Controllers\Admin\ProductController::class,'addCheck'])->name('AddProductCheck');

    Route::resource('categories',CategoryController::class);

});


Route::get('/{category}/{product}', [App\Http\Controllers\HomeController::class, 'product'])->name('product');


