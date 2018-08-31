<?php

class Product1
{

    private $name;
    protected $price;

   public $public = 'PUBLIC';
   protected $protected = 'PROTECTED';
   private $private = 'PRIVATE';

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct()
    {
        return "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена со скидкой: {$this->getPrice()}<br>";
    }

    public function getName()
    {
        return $this->name;
    }


}