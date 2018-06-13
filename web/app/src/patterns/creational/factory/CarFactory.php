<?php

namespace patterns\creational\factory;

interface CarFactory
{
    public function buildCar($type);
}