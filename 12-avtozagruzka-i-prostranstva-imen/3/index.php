<?php

use classes\BookProduct;
use classes\NotebookProduct;
use classes\interfaces\iGadget;

ini_set("display_errors",1);
error_reporting(E_ALL);

// require_once 'classes/Product.php';
// require_once 'classes/i3DBook.php';
// require_once 'classes/iGadget.php';
// require_once 'classes/BookProduct.php';
// require_once 'classes/NotebookProduct.php';

function autoloader($class)
{
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
    	require_once $file;
    }
}
spl_autoload_register('autoloader');


function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(iGadget $product){
	echo "<p>Предлагаем чехлы для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Vaio',400, 'intel');

debug($book);

echo $book->getProduct();