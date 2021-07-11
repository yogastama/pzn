<?php
// convert tipedata

$a = (int) "100";
var_dump($a);

$b = (string) 1000;
var_dump($b);

$c = (float) "1000.12";
var_dump($c);
$c = (string) 1000.12;
var_dump($c);

// curly brace
// adalah fitur yang ada di php jika ingin memasukkan variabel ke dalam string dan string tersebut jadi satu dengan sebuah string
$var = "var";
$test = "This is {$var}s";
var_dump($test);
