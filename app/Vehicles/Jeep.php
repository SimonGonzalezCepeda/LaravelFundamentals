<?php

namespace App\Vehicle;

class Jeep
{
    public function __construct(Fuel $fuel)
    {
        $this->fuel = $fuel;
    }

    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}