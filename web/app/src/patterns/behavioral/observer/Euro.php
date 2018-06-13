<?php

namespace App\Acme\patterns\behavioral\observer;


class Euro implements Currency {
    private $price;

    public function __construct($price) {
        $this->price = $price;
        echo "<p>Euro Original Price : {$price}</p>";
    }

    public function update() {
        $this->price = $this->getPrice();
        echo "<p>Euro Updated Price : {$this->price}</p>";
    }

    public function getPrice() {
        return f_rand(0.78, 0.85);
    }

}