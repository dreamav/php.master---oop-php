<?php

class Car
{

    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public static $countCar = 0;

    public function __construct($color, $wheels = 4, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;

        self::$countCar++;
    }

    public static function getCountCar()
    {
        echo self::$countCar;
    }

    public function getCarInfo(){
        return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>";
    }

}