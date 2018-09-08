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


$a1 = \app\A::getInstance();
$a2 = \app\A::getInstance();

var_dump($a1);
var_dump($a2);

$b1 = \app\B::getInstance();
$b2 = \app\B::getInstance();

var_dump($b1);
var_dump($b2);