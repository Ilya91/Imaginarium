<?php

namespace App\Acme\patterns\creational\simpleFactory;


use Exception;

class carFactory
{

    public function __construct()
    {
        // ... //
    }

    public static function build($type = '')
    {
        switch ($type){
            case 'Sedan':
                return new car_Sedan();
                break;
            case 'Suv':
                return new car_Suv();
                break;
            default:
                return new car_Luxury();
        }
    }
}