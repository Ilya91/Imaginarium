<?php

namespace App\Acme\patterns\structural\adapter;

interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}