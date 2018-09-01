<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    /**
     * 分类的状态
     */
    const STATUS_TRUE = 1;
    const STATUS_FALSE = 2;

    /**
     * 允许批量赋值的指端
     * @var array
     */
    protected $fillable = [
        'cid', 'name', 'description', 'sort', 'created_at', 'updated_at'
    ];
}
