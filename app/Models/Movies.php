<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    /**
     * 最近电影列表
     */
    const RECENT_MOVIES_LIST = 3;

    /**
     * 电影的状态
     */
    const STATUS_DEFAULT = 0;
    const STATUS_REVIEW_SUCCESS = 1;
    const STATUS_RELEASE_SUCCESS = 2;
    const STATUS_REVIEW_ERROR = 3;
}
