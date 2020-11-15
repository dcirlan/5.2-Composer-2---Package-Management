<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/wcs/Hello.php';
require __DIR__ . '/../vendor/ehime/hello-world/src/HelloWorld/SayHello.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

//$hello = new Hello();
//echo $hello->talk();

$hella = new SayHello();
echo $hella->world();
