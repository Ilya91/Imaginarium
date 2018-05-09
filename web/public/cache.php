#!/usr/bin/env php
<?php
include '../app/vendor/autoload.php';
use App\Acme\RedisCache;

$cache = new RedisCache();

var_dump($cache->read('key'));