<?

require_once "classes/Product.2.php";

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}



$book = new Product('Easy laravel',20,null,350);
$notebook = new Product('Sony Vaio',500,'intel i5',null);

debug($book);
debug($notebook);

echo $book->getProduct('book');
echo $notebook->getProduct('notebook');

