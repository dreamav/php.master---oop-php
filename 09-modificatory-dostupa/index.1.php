<?php
require_once 'classes/Product.1.php';
//require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.1.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct1('Три мушкетера', 20, 1000);

debug($book);