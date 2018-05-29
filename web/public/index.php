<?php
include '../app/vendor/autoload.php';

class MyClass{
    public $param;
// Конструктор класса
    function __construct($param){
        $this->param = $param;
        echo "Object created";
    }
// Перегружаем оператор clone
    function __clone(){
        echo "Object cloned";
    }
}

$m = new MyClass(5);
//var_dump($m);
$x = $m;
$x->param = 27;

$y = clone $m;
$y->param = 4;

var_dump($m);
var_dump($x);
var_dump($y);
?>
<hr>
<?php

class Animal {
    function eat() {
        echo "eat abstract<br>";
    }

    function action() {
        $this->eat();
    }
}
class Dog extends Animal {
// Функция Test() для класса B
    function eat() {
        echo "eat meat<br>";
    }
}

class Cat extends Animal {
// Функция Test() для класса B
    function eat() {
        echo "eat fish<br>";
    }
}
$a = new Animal();
$b = new Dog();
$c = new Cat();

$a->action();
$b->action();
$c->action();

?>
<hr>
<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Деление на ноль.');
    }
    return 1/$x;
}

function a($x){
    return inverse($x);
}
function b($x){
    return a($x);
}
function c($x){
    return b($x);
}
try {
    echo c(0) . "\n";
    //echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}
?>
<hr>
<?php
class Super{
    public $a = 12;
}
$var = 12;
function altron($obj, $var){
    $obj->a = 22;
    $var = 22;
    return $var;
}

$super = new Super();
var_dump($var);
$var = 22;
var_dump($var);
