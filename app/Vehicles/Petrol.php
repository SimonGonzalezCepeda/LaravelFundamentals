<?php


namespace App\Vehicles;


class Petrol implements Fuel
{
    public function getPrice()
    {
        return 130.7;
    }
}