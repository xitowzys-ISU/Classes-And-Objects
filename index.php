<?php

use classes\Dog;
use classes\Lion;
use classes\Bird;

ini_set('display_errors', 'On');
ini_set("error_reporting", E_ALL);

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

$dog = new Dog("Male");
$lion = new Lion("Male");
$bird = new Bird("Male");

echo $dog->getName() . "<br>";
echo $dog->eat() . "<br>";
echo $lion->getName() . "<br>";
echo $lion->chase() . "<br>";
echo $lion->eat() . "<br>";
echo $bird->getName() . "<br>";
echo $bird->eat() . "<br>";

echo '<pre>';
var_dump($dog);
echo '</pre>';

echo '<pre>';
var_dump($lion);
echo '</pre>';

echo '<pre>';
var_dump($bird);
echo '</pre>';
