<?php

namespace App\Providers;

use App\Services\ProductService;
use App\Repositories\ProductRepository;
use App\Services\ProductTypeService;
use App\Repositories\ProductTypeRepository;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
         Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProductRepository::class, ProductService::class);
        $this->app->singleton(ProductTypeRepository::class, ProductTypeService::class);
    }
}
