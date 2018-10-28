<?php

namespace Evrey\NoSql\Service;


class BaseNoSql
{
    /**
     * @var array
     */
    protected static $_instance = [];

    /**
     * @return NoSqlInterface
     */
    public static function getInstance(): NoSqlInterface
    {
        $class = static::class;
        if (!isset(static::$_instance[$class])) {
            static::$_instance[$class] = new static();
        }
        return static::$_instance[$class];

    }

    /**
     * Single object. Need to use getInstance
     */
    private function __construct() {}
}