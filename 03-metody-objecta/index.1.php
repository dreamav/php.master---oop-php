<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car();
$car1->color = 'черный';
$car1->brand = 'volvo';

echo $car1->getCarInfo();
