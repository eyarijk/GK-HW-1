<?php

namespace Evrey\NoSql\Service;


use Evrey\NoSql\Credential\CredentialInterface;

class Redis extends BaseNoSql implements NoSqlInterface
{
    /**
     * @var \Redis
     */
    private $client;

    /**
     * @param CredentialInterface $credential
     * @return bool
     */
   public function createServer(CredentialInterface $credential): bool
   {
       $this->client = new \Redis();
       $this->client->connect($credential->getHost(),$credential->getPort());
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
       return $this->client->flushAll();
   }

    /**
     * @param string $key
     * @param $data
     * @param int $timeout
     * @return bool
     */
   public function set(string $key, $data,int $timeout = 0): bool
   {
      return $this->client->set($key,$data,$timeout);
   }
}