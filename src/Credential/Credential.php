<?php

namespace Evrey\NoSql\Credential;


class Credential implements CredentialInterface
{
    /**
     * @var string
     */
    private $host;

    /**
     * @var int
     */
    private $port;

    /**
     * @return string
     */
    public function getHost(): string
    {
       return $this->host;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
       return $this->port;
    }

    /**
     * @param string $host
     * @return CredentialInterface
     */
    public function setHost(string $host): CredentialInterface
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @param int $port
     * @return CredentialInterface
     */
    public function setPort(int $port): CredentialInterface
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return Credential
     */
    public static function factory(): self
    {
        return new self();
    }
}