<?php

namespace App\Http\Controllers;

use App\Models\Movies;

class InfoController extends Controller
{

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index($id){

        // 获取相关的电影信息
        $movie = Movies::query()->find($id);

        return view('info', [
            'movie' => $movie
        ]);
    }
}
