<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.allCategories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.categories.addCategories', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryRequest $request)
    {
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

        return redirect()->route('categories.index')->with('success', 'Product successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        $editCategory = $category;
//        dd($editCategory);
        return view('admin.categories.addCategories', compact('categories', 'editCategory'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(categoryRequest $request, Category $category)
    {
        $file = customHasFiles([
            "categories/" => $request->hasFile('img') ? $request->img : 'default.png',
        ]);
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Product successfully update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
//        dd('adas');
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Product successfully deleted.');

    }
}
