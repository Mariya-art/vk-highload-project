<?php

namespace App\Providers;

use App\Cache\AppMemcached;
use App\Cache\AppMemcachedInterface;
use App\Cache\AppRedis;
use App\Cache\AppRedisInterface;
use App\Handlers\LoggerHandler;
use App\Handlers\LoggerHandlerInterface;
use App\Services\BubbleSortService;
use App\Services\MemcacheService;
use App\Services\MemcacheServiceInterface;
use App\Services\RedisService;
use App\Services\RedisServiceInterface;
use App\Services\QuickSortService;
use App\Services\SortService;
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

        $this->app->bind(LoggerHandlerInterface::class, LoggerHandler::class);
        
        $this->app->bind(MemcacheServiceInterface::class, MemcacheService::class);
        $this->app->bind(RedisServiceInterface::class, RedisService::class);
        $this->app->bind(AppMemcachedInterface::class, AppMemcached::class);
        $this->app->bind(AppRedisInterface::class, AppRedis::class);
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
