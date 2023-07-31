<?php

namespace App\Common\Cache;

use Illuminate\Support\Facades\Redis;

class BaseCache
{
    /**
     * redis client
     *
     * @return \Illuminate\Redis\Connections\Connection
     */
    public static function client()
    {
        return Redis::connection();
    }

    public static function getKey($k, ...$params)
    {
        $prefix = "shop:";
        return $prefix.sprintf($k, ...$params);
    }
}
