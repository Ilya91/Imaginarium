<?php
include '../app/vendor/autoload.php';

use App\Acme\patterns\behavioral\observer\Pound;
use App\Acme\patterns\behavioral\observer\priceSimulator;
use App\Acme\patterns\behavioral\observer\Yen;
use App\Acme\patterns\creational\simpleFactory\carFactory;

function f_rand($min=0,$max=1,$mul=1000000){
    if ($min>$max) return false;
    return mt_rand($min*$mul,$max*$mul)/$mul;
}
$priceSimulator = new priceSimulator();
$currency1 = new Pound(0.60);
$currency2 = new Yen(122);

$priceSimulator->addCurrency($currency1);
$priceSimulator->addCurrency($currency2);

echo "<hr />";
$priceSimulator->updatePrice();

echo "<hr />";
$priceSimulator->updatePrice();