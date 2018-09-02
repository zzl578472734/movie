<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/2
 * Time: 1:46
 */
namespace App\Http\Controllers;

use App\Models\Banners;
use App\Models\Categories;
use App\Models\Movies;

class IndexController extends Controller{

    /**
     * 电影的首页
     */
    public function index(){

        // 获取分类数据
        $categories = Categories::query()->where('status', Categories::STATUS_TRUE)->orderBy('sort', 'desc')->get();
        $categories = self::getCategoryTree($categories->toArray());

        // 获取banner的数据
        $banners = Banners::query()->where('status', Banners::STATUS_TRUE)->orderBy('sort', 'desc')->get();

        // 获取最热门的视频列表
        $recent_movies = Movies::query()->where('status', Movies::STATUS_RELEASE_SUCCESS)->limit(Movies::RECENT_MOVIES_LIST)->orderBy('hits', 'desc')->get();

        return view('index', [
            'categories' => $categories,
            'banners' => $banners,
            'recent_movies' => $recent_movies,
        ]);
    }

    /**
     * 递归计算分类树
     * @param $categories
     * @param int $cid
     * @param int $level
     * @return array
     */
    static private function getCategoryTree($categories, $cid = 0, $level = 1){
        static $tree = array();
        if ($categories) {
            foreach ($categories as $category){
                if ($category['cid'] == $cid){
                    $category['level'] = $level;
                    $tree[] = $category;
                    self::getCategoryTree($categories, $category['id'], $level+1);
                }
            }
        }
        return $tree;
    }
}