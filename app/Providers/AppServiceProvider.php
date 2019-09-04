<?php

namespace App\Providers;
use App\Category;
use View;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;


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
        Schema::defaultStringLength('191');

        View:: composer('front-end.includes.header',function ($view){
           $view ->with('categories',Category::where('publication_status',1)->get());
        });

        View:: composer('sublime.includes.header',function ($view){
            $view ->with('categories',Category::where('publication_status',1)->get());
        });
    }
}
