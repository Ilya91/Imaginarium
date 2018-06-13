<?php

namespace App\Acme\patterns\creational\simpleFactory;


class car_Sedan
{
    public $b;

    public function __construct()
    {
        $this->b = 2;
    }

    public function someMethod()
    {
        $this->b = 3;
        return $this;
    }

    public function modify($a)
    {
        $this->b *= $a;
    }

}