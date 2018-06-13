<?php

namespace App\Acme\patterns\behavioral\observer;


interface Observer {
    public function addCurrency(Currency $currency);
}