<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     * 启动任何应用服务
     *
     * @return void
     */
    public function boot()
    {
        //设置缺省长度
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     * 注册任何应用服务
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
