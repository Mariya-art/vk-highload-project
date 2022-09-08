<?php

namespace App\Cache;

use Redis;

class AppRedis extends Redis implements AppRedisInterface
{
    public function set(string $key, mixed $value, int $expiration = 0)
    {

    }
    
    public function get($key)
    {

    }
    
    public function connect(
        $host,
        $port = 6379,
        $timeout = 0.0,
        $reserved = null,
        $retryInterval = 0,
        $readTimeout = 0.0
    )
    {

    }
}
