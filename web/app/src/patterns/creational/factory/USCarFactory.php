<?php

namespace patterns\creational\factory;

class USCarFactory implements carFactory
{

    public function __construct()
    {

    }

    public function buildCar($type)
    {
        $car = null;

        switch($type) {
            case 'suv':
                $car = new USSuvFactory();
                break;
            case 'sedan':
                $car = new USSedanFactory();
                break;
            default:
                $car = new USSedanFactory();
                break;
        }

        return $car;
    }
}