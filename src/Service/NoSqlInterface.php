<?php

namespace Evrey\NoSql\Service;


use Evrey\NoSql\Credential\CredentialInterface;

interface NoSqlInterface
{
    /**
     * @param string $key
     * @param $data
     * @param int $timeout
     * @return bool
     */
    public function set(string $key,$data,int $timeout = 0): bool;

    /**
     * @return bool
     */
    public function flush(): bool;

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key);

    /**
     * @param string $key
     * @return bool
     */
    public function delete(string $key): bool;

    /**
     * @param CredentialInterface $credential
     * @return bool
     */
    public function createServer(CredentialInterface $credential): bool;

    /**
     * Singleton
     * @return NoSqlInterface
     */
    public static function getInstance(): NoSqlInterface;
}