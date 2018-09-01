<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * 注册应用的服务
     * @return void
     */
    public function boot()
    {
        // 注册数据填充
        $this->app->singleton(\Faker\Generator::class, function (){
            return \Faker\Factory::create('zh_CN');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
