<?php

namespace App\Acme;

class RedisCache
{
    private $redis;

    public function __construct()
    {
        $this->redis = new \Predis\Client('tcp://redis:6379');
    }

    /**
     * @param $key
     * @return string
     */
    public function read($key)
    {
        return $this->redis->get($key);
    }

    /**
     * @param $key
     * @param $value
     * @return mixed
     */
    public function write($key, $value)
    {
        $this->redis->set($key, $value);
        return $value;
    }
}
