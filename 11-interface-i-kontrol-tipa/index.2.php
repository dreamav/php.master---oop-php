<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

require_once 'classes/Product.2.php';
require_once 'classes/i3DBook.php';
require_once 'classes/iGadget2.php';
require_once 'classes/BookProduct.2.php';
require_once 'classes/NotebookProduct.2.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(iGadget2 $product){
	echo "<p>Предлагаем чехлы для гаджета {$product->getName()}</p>";
}

$book = new BookProduct2('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct2('Vaio',400, 'intel');

offerCase($book);
offerCase($notebook);

debug($book);

echo $book->getProduct();