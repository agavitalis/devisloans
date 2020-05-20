<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use DB;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        Schema::defaultStringLength(191);
        //setup view composers

        view()->composer('partials.user.sidebar_right', function ($view) {
            
            $series = DB::table('series')->where(['active'=>1])->get();          
            $view->with('series', $series);
        });

        view()->composer('partials.admin.sidebar_right', function ($view) {
            
            $series = DB::table('series')->where(['active'=>1])->get();          
            $view->with('series', $series);
        });
    }
}
