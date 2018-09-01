<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * 获取分类的列表信息
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::query()->where('status', Categories::STATUS_TRUE)->orderBy('sort', 'desc')->get();
        return response()->json($categories);
    }

    /**
     * Display the specified resource.
     * 根据分类id,含糊分类的名称
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Categories::query()->where('status', Categories::STATUS_TRUE)->find($id);
        return response()->json($category);
    }

}
