<?php


class BookProduct2 extends Product1
{

    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        var_dump($this->public);
        var_dump($this->protected);
        var_dump($this->private);
    }

    public function getProduct()
    {
        $out = parent::getProduct();
        $out .= "Цена без скидки: {$this->price}<br>";
        $out .= "Кол-во страниц: {$this->numPages}<br>";
        return $out;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

}