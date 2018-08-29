<?php
require_once 'classes/Car.4.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car('черный', 4, 180, 'volvo');

debug($car1);

unset($car1);

$car2 = new Car('ocll',4, 200, 'zhigul');

debug($car2);
