<?php


namespace App\Vehicle;


class Gasolina implements Fuel
{
    public function getPrice()
    {
        return 150;
    }
}