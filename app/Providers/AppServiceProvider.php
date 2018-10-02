<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Place;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
       Schema::defaultStringLength(191);

       $featured = Place::where('popular', 1)->select('image','city')->get();
       View::share('featured', $featured);
    }

    public function register()
    {
        //
    }
}
