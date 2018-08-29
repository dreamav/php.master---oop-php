<?php

class Car
{

    public $color;
    public $wheels;
    public $speed;
    public $brand;

    public function __construct($color, $wheels = 4, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
    }

    public function __destruct()
    {
        var_dump($this);
    }

}