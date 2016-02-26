<?php


namespace App\Vehicles;


class Gasolina implements Fuel
{
    public function getPrice()
    {
        return 150;
    }
}