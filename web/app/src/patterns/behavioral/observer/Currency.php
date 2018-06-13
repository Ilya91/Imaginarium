<?php

namespace App\Acme\patterns\behavioral\observer;


interface Currency {
    public function update();
    public function getPrice();
}