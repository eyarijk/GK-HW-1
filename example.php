<?php

require_once __DIR__ . '/vendor/autoload.php';

$credentialMemcache = \Evrey\NoSql\Credential\Credential::factory()
    ->setHost('127.0.0.1')
    ->setPort(11211);

$credentialRedis =  \Evrey\NoSql\Credential\Credential::factory()
    ->setHost('127.0.0.1')
    ->setPort(6379);

$noSqlMemcached = \Evrey\NoSql\NoSqlStaticFactory::factory('memcached');
$noSqlMemcached->createServer($credentialMemcache);

$noSqlRedis = \Evrey\NoSql\NoSqlStaticFactory::factory('redis');
$noSqlRedis->createServer($credentialRedis);

echo 'Redis:';
$noSqlRedis->set('foo','bar',120);
echo $noSqlRedis->get('foo')."\n";

echo 'Memcached:';
$noSqlMemcached->set('hello','guys',120);
echo $noSqlMemcached->get('hello')."\n";