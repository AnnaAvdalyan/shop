<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use Illuminate\Http\Request;
use Faker\Provider\File;
class CategoryController1 extends Controller
{
    public function dashbord()
    {
//        dump('test');
        return view('admin/dashbord');

    }
    public function test()
    {
        dump('test');
        return view('test/test');

    }

    public function add()
    {
        $categories =Category::all();
        return view('admin/categories/add',compact('categories'));
    }
    public function addCheck(categoryRequest $request){
//        dd($request);
        $file = customHasFiles([
            "categories/" => $request->hasFile('img') ? $request->img : 'default.png',
        ]);
        Category::create([
            'img' => $file[0],
            'name' => $request->input('name'),
            'name_ru' => $request->input('name_ru'),
            'name_arm' => $request->input('name_arm'),
            'parent_id' => $request->input('parent_id'),
        ]);

        return redirect()->route('categoriesAdd')->with('success', 'Product successfully added.');
    }
}
