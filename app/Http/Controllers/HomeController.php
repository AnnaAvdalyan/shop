<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        return view('index',compact('products','categories'));
    }
    public function category($name)
    {
        $category  = Category::where('name',$name)->first();
//        $products = Product::where('category_id',$category_id->id)->get();
        $categories = Category::get();

        return view('category/index',compact('category','categories'));
    }
    public function product($product_name){
        $product = Product::where('title',$product_name)->first();
        $categories = Category::get();
        $products = Product::get();
        return view('single',compact('product','categories','products'));
//        dd($product);
    }

    public function ajax(){
        $products = Product::all();
        return response()->json($products);
    }
}
