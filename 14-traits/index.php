<?
use classes\BookProduct;

ini_set("display_errors",1);
error_reporting(E_ALL);
// 0
# -----------------------------------------
# просто ф-ция autoload, пример из оф сайта
# -----------------------------------------
// function __autoload($classname) {
//     $filename = "./". $classname .".php";
//     include_once($filename);
// }

// 1
# ---------------------------------------------------------------------------
# пишем функцию autoloader, которая будет получать название класса и выходить
# при этом spl_autoload_register('autoloader') просто зарегистрирует эту
# функц в памяти, и будет ее вызывать только тогда когда будет
# встречаться имя класса $classname
# ---------------------------------------------------------------------------
// function autoloader($classname){
// 	exit($classname);
// }
// spl_autoload_register('autoloader');

// 2
# --------------------------------------------------------------------------------
# мы знаем что все классы лежат в папке классы, поэтому используем это и пропишем 
# путь к этой папке чтоб ф-ция могла подключать файлы классов
# --------------------------------------------------------------------------------
//function autoloader($classname){
//	$file = __DIR__."/classes/{$classname}";
//	exit($file);
//}
//spl_autoload_register('autoloader');

// 3
# ------------------------------------------------------
# проверим существует ли файл, если да, то подключим его
# ------------------------------------------------------
# тоесть теперь, при вызове класса (см $book = new BookProduct();)
# мы будем просто подключать файл, для того чтоб класс появился в системе
# и ошибок не возникало
// function autoloader($classname){
// 	$file = __DIR__."/classes/{$classname}";
// 	if (file_exists($file)){
// 	    require_once $file;
//     }
// }
// spl_autoload_register('autoloader');

// 4
# -----------------------------------------------------------------------------------
# усложняем: как быть если в папке classes будут вложенные папки, например interfaces
# а это как раз уже приближенно к реальному миру. Преимущество spl_autoload_register
# перед __autoload в том что мы можем регистрировать сколько угодно функций
# автозагрузчиков.
# -----------------------------------------------------------------------------------
// ищет и подключает классы в папке classes
//function autoloader1($classname){
//	$file = __DIR__."/classes/{$classname}";
//	if (file_exists($file)){
//	    require_once $file;
//    }
//}
//function autoloader2($classname){
//	$file = __DIR__."/classes/interfaces/{$classname}";
//	if (file_exists($file)){
//	    require_once $file;
//    }
//}
//spl_autoload_register('autoloader1');
//spl_autoload_register('autoloader2');
# -------------------------------------------------------------------------------------
# spl_autoload_register('autoloader2',true,true) - третьим параметром идет очередность 
# регистраций классов. prepend - если true то будет выведено раньше
# -------------------------------------------------------------------------------------

// 5
# ---------------------------------------------------------------------------------------
# ну все равно писать автозагрузчики заебешся, поэтому переходим к теме пространства имен
# namespaces
# см обьяснения в файле avtozagruzka-i-prostranstva-imen\classes\interfaces\I3D.php
# ...
# после того как прописали namespaces для всех классов и интерфейсов, у нас в коде 
# вызывается new BookProduct() и он теперь будет undefined
# но PHPStorm умничка при наборе сразу подставляет необходимое namespace
# ...
# далее чтоб не писать \classes\BookProduct придкмали использовать use вверху файла, но
# более того - PHPStorm сам это сделает если набрать просто new BookProduct('Dima')
# навести курсор на название класса и нажать Alt+Enter
# ...
# но теперь возникает ошибка: 
# Fatal error: Class 'classes\BookProduct' not found in D:\OpenServer\domains\study.loc\php.master\avtozagruzka-i-prostranstva-imen\index.php 
# а почему, потому что в загрузчике autoloader1 у нас прописано искать класс в папке 
# classes + имя класса. Но имя класса у нас теперь (после добавления namespace) string 'classes\BookProduct'
# поэтому получается string 'D:\OpenServer\domains\study.loc\php.master\avtozagruzka-i-prostranstva-imen/classes/classes\BookProduct'
# два раза /classes/classes\
# - уберем classes из автозагрузчика
# ---------------------------------------------------------------------------------------
//function autoloader1($classname){
//	$file = __DIR__."/classes/{$classname}";
//	var_dump($file); die;
//	if (file_exists($file)){
//	    require_once $file;
//    }
//}
//function autoloader2($classname){
//	$file = __DIR__."/classes/interfaces/{$classname}";
//	if (file_exists($file)){
//	    require_once $file;
//    }
//}
//spl_autoload_register('autoloader1');
//spl_autoload_register('autoloader2');

// 6
# ---------------------------------------------------------------------------------------
# - уберем classes из автозагрузчика. 
# и теперь, ну чисто логически, нам вторая ф-ция автозагрузчик не нужна, все сделают
# пространства имен!
# ...
# но теперь все равно ошибка и не работает - потому что в файле класса BookProduct.php
# мы используем I3D - но не прописали use для его пространства имен. поэтому просто 
# выделим его в PHPStorm и нажмем alt+enter
# ...
# и да: путь к файлу должен быть с указанием расширения "/$classname.php"
# ---------------------------------------------------------------------------------------
//function autoloader1($classname){
//	$file = __DIR__."/$classname.php";
//	if (file_exists($file)){
//	    require_once $file;
//    }
//}
//spl_autoload_register('autoloader1');

// 7
# --------------------------------------------------------------------------------------
# теперь допишем в нашу ф-цию автозагрузчик замену слешей, чтоб все точно работало и под
# linux
# --------------------------------------------------------------------------------------
function autoloader1($classname){
	$classname = str_replace("\\", "/", $classname);
	$file = __DIR__."/$classname.php";
	if (file_exists($file)){
	    require_once $file;
    }
}
spl_autoload_register('autoloader1');




# ----------------------------------------------------------------------------------
# просто ф-ция для отладки. скопировал чтоб можно было работать и смотреть результат
# по ходу урока
# ----------------------------------------------------------------------------------
function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}
# -------------------------------------------------------------------------
# когда будет вызван класс - сработает ф-ция autoloader, зарегистрированная
# spl_autoload_register
# -------------------------------------------------------------------------
// для 1-4 без namespace
// $book = new BookProduct();
// для >5
$book = new BookProduct('Dima');



debug($book);