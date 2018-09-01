<?php

namespace App\Http\Controllers;

use App\Models\Banners;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     * 获取分类的列表信息
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banners::query()->where('status', Banners::STATUS_TRUE)->orderBy('sort', 'desc')->get();
        return response()->json($banners);
    }

    /**
     * Display the specified resource.
     * 根据分类id,含糊分类的名称
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner = Banners::query()->where('status', Banners::STATUS_TRUE)->find($id);
        return response()->json($banner);
    }

}
