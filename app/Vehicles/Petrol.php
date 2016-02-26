<?php


namespace App\Vehicle;


class Petrol implements Fuel
{
    public function getPrice()
    {
        return 130.7;
    }
}