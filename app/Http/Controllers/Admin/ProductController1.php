<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\categoryRequest;
use App\Http\Requests\productRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    public function add()
    {
        $categories = Category::all();
        return view('admin/products/add', compact('categories'));
    }

    public function addCheck(productRequest $request)
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

        return redirect()->route('categoriesAdd')->with('success', 'Product successfully added.');
    }
}
