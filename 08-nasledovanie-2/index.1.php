<?php

require_once 'classes/Product.1.php';
require_once 'classes/BookProduct.1.php';
require_once 'classes/NotebookProduct.1.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct('Три мушкетера', 20, null, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct();