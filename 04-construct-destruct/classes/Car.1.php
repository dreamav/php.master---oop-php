<?php

class Car
{

    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public function __construct()
    {
        echo __METHOD__ . '<BR>';
    }

    public function getCarInfo(){
        return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>";
    }

}