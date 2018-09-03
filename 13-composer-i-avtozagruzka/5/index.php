<?php

use app\BookProduct;
use app\NotebookProduct;
use PHPMailer\PHPMailer\PHPMailer;
use wfm\interfaces\iGadget;

ini_set("display_errors",1);
error_reporting(E_ALL);

require __DIR__ . "/vendor/autoload.php";

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(iGadget $product){
	echo "<p>Предлагаем чехлы для гаджета {$product->getName()}</p>";
}

//$book = new BookProduct('Три мушкетера', 20, 1000);
//$notebook = new NotebookProduct('Vaio',400, 'intel');
$book = new BookProduct('Три мушкетера', 20, 1000);

$mail = new PHPMailer();

debug($mail);