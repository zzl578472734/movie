<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * 允许被赋值的字段
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','password', 'remember_token', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 不允许被赋值的字段
     * @var array
     */
    protected $hidden = [
//        'password', 'remember_token',
    ];
}
