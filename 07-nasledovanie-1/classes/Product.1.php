<?php

class Product
{

	public $price;
	public $name;

	public $cpu;
	public $numPages;

	public function __construct($name, $price, $cpu = null, $numPages = null)
	{
		$this->name = $name;
		$this->price = $price;
		$this->cpu = $cpu;
		$this->numPages = $numPages;
	}

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }


}