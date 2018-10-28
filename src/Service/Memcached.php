<?php

namespace Evrey\NoSql\Service;


use Evrey\NoSql\Credential\CredentialInterface;

class Memcached extends BaseNoSql implements NoSqlInterface
{
    /**
     * @var \Memcached
     */
    private $client;

    /**
     * @param CredentialInterface $credential
     * @return bool
     */
    public function createServer(CredentialInterface $credential): bool
    {
       $this->client = new \Memcached();
       $this->client->addServer($credential->getHost(),$credential->getPort());
       return true;
    }

    /**
     * @param string $key
     * @return bool|string
     */
    public function get(string $key)
    {
        return $this->client->get($key);
    }

    /**
     * @param string $key
     * @return bool
     */
    public function delete(string $key): bool
    {
        return $this->client->delete($key);
    }

    /**
     * @return bool
     */
    public function flush(): bool
    {
        return $this->client->flush();
    }

    /**
     * @param string $key
     * @param $data
     * @param int $timeout
     * @return bool
     */
    public function set(string $key, $data,int $timeout = 0): bool
    {
        return $this->client->set($key,$data,60);
    }
}