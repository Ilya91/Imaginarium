
<?php
include '../app/vendor/autoload.php';
$g = 'test';
$c = function($a, $b) use($g) {
    echo $a . $b . $g;
};
$g = 'test2';
$d = 'test3';
$c(1, 2);
var_dump($c);

(function() use($g, $d) {
    echo $g;
    echo $d;
})();

abstract class A
{
    abstract function test(string $s);
}

echo '<hr/>';

$arr = ["sitepoint", "phpmaster", "buildmobile", "rubysource",
    "designfestival", "cloudspring"];

// Создаём новый итератор ArrayIterator на основе массива
$iter = new ArrayIterator($arr);
// Итерируем
foreach($iter as $key => $value) {
    echo $key . ":  " . $value . "<br>";
}
var_dump($iter);
echo '<hr/>';
// Многомерный массив
$arr = [
    ["sitepoint", "phpmaster"],
    ["buildmobile", "rubysource"],
    ["designfestival", "cloudspring"],
    "not an array"
];

$iter = new RecursiveArrayIterator($arr);

// Итерируем объект.
// Для этого нам понадобится экземпляр RecursiveIteratorIterator
foreach(new RecursiveIteratorIterator($iter) as $key => $value) {
    echo $key . ": " . $value . "<br>";
}