<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function addCategory( categoryRequest $request ){

        Category::create([
            'img' => 'default.png',
            'name' => $request->input('name'),
            'name_ru' => $request->input('name_ru'),
            'name_arm' => $request->input('name_arm'),
            'parent_id' => '-1',
        ]);
        return response()->json($request);
    }
}
//так data должен быть json, посмотри в request в браузере (в Network) что уходит на сервер
