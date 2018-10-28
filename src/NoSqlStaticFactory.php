<?php

namespace Evrey\NoSql;


use Evrey\NoSql\Service\Memcached;
use Evrey\NoSql\Service\NoSqlInterface;
use Evrey\NoSql\Service\Redis;

class NoSqlStaticFactory
{
    /**
     * @param string $noSql
     * @return NoSqlInterface
     */
    public static function factory(string $noSql): NoSqlInterface
    {
        if ('redis' === $noSql) {
            return Redis::getInstance();
        }

        if ('memcached' === $noSql) {
            return Memcached::getInstance();
        }

        throw new \InvalidArgumentException('Unknown noSql given');
    }
}