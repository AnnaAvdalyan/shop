<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Galleries_product;
use App\Models\Gallery;
use App\Models\Gallery_product;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller


{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
//        dd($products);
        return view('admin.products.index', compact('products'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = customHasFiles([
            "products/" => $request->hasFile('img') ? $request->img : 'default.png',
        ]);
        Product::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->input('category_id'),
            'img' => $file[0],
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
            'title' => $request->input('title'),
            'title_ru' => $request->input('title_ru'),
            'title_arm' => $request->input('title_arm'),
            'description' => $request->input('description'),
            'description_ru' => $request->input('description_ru'),
            'description_arm' => $request->input('description_arm'),
            'slug' => $request->input('slug'),
            'slug_ru' => $request->input('slug_ru'),
            'slug_arm' => $request->input('slug_arm'),
            'length' => $request->input('length'),
            'width' => $request->input('width'),
            'height' => $request->input('height'),
            'kilograms' => $request->input('kilograms'),
            'count' => $request->input('count'),
            'status' => 'active',
            'can_add' => 'yes',
        ]);

        return redirect()->route('products.index')->with('success', 'Product successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $galleries = Gallery::all();
        return view('admin.products.show', compact('product', 'galleries'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
//        dd('test');
        $products = Product::all();
        $categories = Category::all();
        $editProduct = $product;
        return view('admin.products.create', compact('products', 'categories', 'editProduct'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $file = customHasFiles([
            "categories/" => $request->hasFile('img') ? $request->img : 'default.png',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product successfully update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product successfully deleted.');
    }

    public function addGallery(Request $request)
    {
        $pieces = explode(",", $request->productAddCategory);
//        dd($pieces);
        foreach ($pieces as $gallery) {
            Galleries_product::create([
                'gallery_id' => (int)$gallery,
                'product_id' => $request->product_id
            ]);
        }
        $gallery = Product::where('id',$request->product_id)->first();
        dump($gallery->galleries);
    }
}
