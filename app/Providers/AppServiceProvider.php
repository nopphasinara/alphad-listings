<?php

namespace App\Providers;

use App\Http\Utilities\Location;
use App\Http\Utilities\Category;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // shared views
        View::share('locations', Location::locations());
        View::share('categories', Category::main());

        //custom if
        Blade::if('company', function () {
            return Auth::user()->isCompany();
        });

        Schema::defaultStringLength(191);
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
