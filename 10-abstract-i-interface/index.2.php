<?php
ini_set("display_errors",1);
error_reporting(E_ALL);


require_once 'classes/Product.2.php';
require_once 'classes/BookProduct.2.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct2('Три мушкетера', 20, 1000);

debug($book);

echo $book->getProduct();


