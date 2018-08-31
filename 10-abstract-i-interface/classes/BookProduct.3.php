<?php


class BookProduct3 extends ProductABS2 implements i3DBook
{

    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(10);
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

    public function test()
    {
        // TODO: Implement test() method.
        var_dump(self::TEST);
    }

    public function addProduct($name, $price, $numPages = 0)
    {
        // TODO: Implement addProduct() method.
    }

}