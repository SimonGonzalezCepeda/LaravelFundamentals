<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

interface Fuel{
    public function getPrice();
}
class JeepWrangler
{
    public function __construct(Petrol $fuel)
    {
        $this->fuel = $fuel;
    }

    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}

class Petrol implements Fuel
{
    public function getPrice()
    {
        return 130.7;
    }
}
class Gasolina implements Fuel
{
    public function getPrice()
    {
        return 150;
    }
}



$car = $this->app->bind('Fuel', 'Gasolina');
$car = $this->app->make('Jeep');
$cost = $car->refuel(60)+ $jeep->refuel(60);

echo($cost);

