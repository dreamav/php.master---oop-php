<?php

require_once 'classes/Car.2.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car('машина1', 4, 180, 'volvo');

$car1->getPrototypeInfo();

echo "<br>";
echo Car::TEST_CAR;

echo Car::class;