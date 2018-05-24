<?php

namespace App\Acme\patterns\structural\facade;

interface OsInterface
{
    public function halt();

    public function getName(): string;
}