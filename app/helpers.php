<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/2
 * Time: 15:36
 */

if ( !function_exists('get_print')){

    function get_print($data, $is_die = true, $is_dump = false){
        echo '<pre>';
        $is_dump? var_dump($data) : print_r($data);
        !$is_die? : die();
    }
}

if ( !function_exists('get_time')){

    function get_time($timestamp = ''){
        return $timestamp? date('Y-m-d H:i:s', $timestamp) : date('Y-m-d H:i:s', time());
    }
}