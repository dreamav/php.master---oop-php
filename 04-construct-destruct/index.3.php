<?php
require_once 'classes/Car.3.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car('черный', 4, 180, 'volvo');

$car1->getLorem();
