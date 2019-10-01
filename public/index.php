<?php
require '../vendor/autoload.php';

use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\hello;

$world = new World();
$lara = new Lara();
$vincent = new Hello\Someone('Vincent');

//以下Someone類別的使用可以不用use Demo\Hello;
$mary = new Someone('Mary');
$john = new Someone('John');