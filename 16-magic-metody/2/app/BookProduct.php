<?php
namespace app;

use wfm\interfaces\i3DBook;
use wfm\Product;

class BookProduct extends Product implements i3DBook
{

    public $numPages;

    public $action1;
    public $action2;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
        $this->setDiscount(5);
//        var_dump(self::class);
    }

    public function __toString()
    {
//        return "Hello Book";
        return $this->getProduct();
    }

    public function __get($name)
    {
//        var_dump($name);
        $name = ucfirst($name);
        $method = "get{$name}";
        if(method_exists($this,$method)){
            return $this->$method();
        }
    }

    public function __set($name, $value)
    {
        var_dump($name, $value);
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

    public function doAction1()
    {
        echo $this->action1 = "<p>выполнили действие 1</p>";
        return $this;
    }

    public function doAction2()
    {
        echo $this->action1 = "<p>выполнили действие 2</p>";
        return $this;
    }

}