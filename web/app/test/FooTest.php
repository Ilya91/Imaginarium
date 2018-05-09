<?php

namespace AppTest\Acme;

use App\Acme\RedisCache;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testGetName()
    {
        $foo = new RedisCache();
        $this->assertEquals($foo->getName(), 'Nginx PHP MySQL');
    }
}
