<?php

namespace patterns\creational\factory;


class UKCarFactory implements CarFactory
{

    public function __construct() {

    }

    public function buildCar($type){

        $car = null;

        switch($type) {
            case 'suv':
                $car = new UKSuvFactory();
                break;
            case 'sedan':
                $car = new UKSedanFactory();
                break;
            default:
                $car = new UKSedanFactory();
                break;
        }

        return $car;
    }
}