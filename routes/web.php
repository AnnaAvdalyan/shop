<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\GelleryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\Admin\CategoryController1;
use App\Http\Controllers\HomeController;
//use App\Models\Gallery;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ HomeController::class, 'index'])->name('home');
//Route::get('/home', [ HomeController::class, 'index'])->name('home');

Route::post('/order/place', [BasketController::class, 'basketConfirm'])->name('basketConfirm');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/category/{name}', [HomeController::class, 'category'])->name('category');
//Route::get('/{name}', [HomeController::class, 'product'])->name('product');
Route::get('/basket', [BasketController::class, 'basket'])->name('basket');
Route::post('/basket/add/{id}',[BasketController::class,'basketAdd'])->name('basketAdd');
Route::post('/basket/remove/{id}',[BasketController::class,'basketRemove'])->name('basketRemove');
Route::get('/order', [BasketController::class, 'basketPlace'])->name('order');
Route::get('/ajax/test',[HomeController::class,'ajax'])->name('ajaxTest');


Route::middleware(['adminchek'])->group(function() {
    Route::get('/test/test', [CategoryController1::class,'test'])->name('test');
    Route::get('/admin/dashbord', [CategoryController1::class,'dashbord'])->name('dashbord');

    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);
    Route::resource('galleries',GelleryController::class);
    Route::post('admin/categories/add', [AjaxController::class,'addCategory'])->name('addCategory');
    Route::post('product/addGallery',[ProductController::class,'addGallery'])->name('productAddCategory');
});


//Route::get('/{category}/{product}', [HomeController::class, 'product'])->name('product');
Auth::routes();


