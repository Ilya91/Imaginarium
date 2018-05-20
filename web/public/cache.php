#!/usr/bin/env php
<?php
include '../app/vendor/autoload.php';
use App\Acme\RedisCache;

$cache = new RedisCache();
$url = 'start';
$page = $cache->read($url);

if (!isset($page)){
    $page = rand(10, 1000000);
    $cache->write($url, $page);
    $cache->expire($url, 60);
}