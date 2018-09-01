<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

require_once 'classes/Product.1.php';
require_once 'classes/i3DBook.php';
require_once 'classes/BookProduct.1.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct1('Три мушкетера', 20, 1000);

debug($book);

echo $book->getProduct();

class A {};
class B extends A{};
class C{};

$a = new A;
$b = new B;
$c = new C;

echo "Проверка 1:";
var_dump($a instanceof A);
var_dump($b instanceof B);
var_dump($c instanceof C);

echo "Проверка 2:";
var_dump($a instanceof A);
var_dump($b instanceof A);
var_dump($c instanceof A);