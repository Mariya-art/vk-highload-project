<?php

namespace App\Cache;

interface AppRedisInterface extends CacheInterface
{
    public function get($key);
    
    public function connect(
        $host,
        $port = 6379,
        $timeout = 0.0,
        $reserved = null,
        $retryInterval = 0,
        $readTimeout = 0.0
    );
}