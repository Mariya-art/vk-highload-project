<?php

namespace App\Cache;

use Memcached;

class AppMemcached extends Memcached implements AppMemcachedInterface
{
    public function set(string $key, mixed $value, int $expiration = 0)
    {

    }

    public function get(string $key, ?callable $cache_cb = null, int $get_flags = 0)
    {

    }

    public function addServer(string $host, int $port, int $weight = 0)
    {
        
    }
}