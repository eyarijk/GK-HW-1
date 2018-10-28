<?php

namespace Evrey\NoSql\Credential;


interface CredentialInterface
{
    /**
     * @param string $host
     * @return CredentialInterface
     */
    public function setHost(string $host): CredentialInterface;

    /**
     * @param int $port
     * @return CredentialInterface
     */
    public function setPort(int $port): CredentialInterface;

    /**
     * @return int
     */
    public function getPort(): int;

    /**
     * @return string
     */
    public function getHost(): string;
}