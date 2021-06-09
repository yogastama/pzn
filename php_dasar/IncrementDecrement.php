<?php
$i = 1;
// post increment
// kalau di passing ke variabel, maka si $i akan di passing dulu ke variabelnya kemudian di ++
$a = $i++;
var_dump($a);

// pre increment
// kalau di passing ke variabel, maka si $i akan di naikkan dulu abru di di passing ke variabel
$b = ++$i;
var_dump($b);