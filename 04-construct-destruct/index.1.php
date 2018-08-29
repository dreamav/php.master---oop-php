<?php
require_once 'classes/Car.1.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car();

debug($car1);

