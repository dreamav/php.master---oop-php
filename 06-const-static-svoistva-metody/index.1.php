<?php

require_once 'classes/Car.1.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car('машина1', 4, 180, 'volvo');
Car::getCountCar();
echo "<br>";

$car2 = new Car('машина2', 4, 200, 'bmw');
Car::getCountCar();
echo "<br>";

$car3 = new Car('машина3', 4, 200, 'bmw');

Car::getCountCar();
echo "<br>";