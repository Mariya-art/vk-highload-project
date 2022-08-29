<?php

namespace App\Providers;

use App\Services\BubbleSortService;
use App\Services\QuickSortService;
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
        $this->app->bind(SortService::class, BubbleSortService::class);
        $this->app->bind(SortService::class, QuickSortService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
